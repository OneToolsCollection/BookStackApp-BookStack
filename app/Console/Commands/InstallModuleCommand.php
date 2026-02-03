<?php

namespace BookStack\Console\Commands;

use BookStack\Http\HttpRequestService;
use BookStack\Theming\ThemeModule;
use BookStack\Theming\ThemeModuleException;
use BookStack\Theming\ThemeModuleManager;
use BookStack\Theming\ThemeModuleZip;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class InstallModuleCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bookstack:install-module
                            {location : The URL or path of the module file}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install a module to the currently configured theme';

    protected array $cleanupActions = [];

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $location = $this->argument('location');

        // Get the ZIP file containing the module files
        $zipPath = $this->getPathToZip($location);
        if (!$zipPath) {
            $this->cleanup();
            return 1;
        }

        // Validate module zip file (metadata, size, etc...) and get module instance
        $zip = new ThemeModuleZip($zipPath);
        $themeModule = $this->validateAndGetModuleInfoFromZip($zip);
        if (!$themeModule) {
            $this->cleanup();
            return 1;
        }

        // Get the theme folder in use, attempting to create one if no active theme in use
        $themeFolder = $this->getThemeFolder();
        if (!$themeFolder) {
            $this->cleanup();
            return 1;
        }

        // Get the modules folder of the theme, attempting to create it if not existing,
        // and create a new module manager instance.
        $moduleFolder = $this->getModuleFolder($themeFolder);
        $manager = new ThemeModuleManager($moduleFolder);

        // Handle existing modules with the same name
        $exitingModulesWithName = $manager->getByName($themeModule->name);
        $shouldContinue = $this->handleExistingModulesWithSameName($exitingModulesWithName, $manager);
        if (!$shouldContinue) {
            $this->cleanup();
            return 1;
        }

        // Extract module ZIP into the theme modules folder
        try {
            $newModule = $manager->addFromZip($themeModule->name, $zip);
        } catch (ThemeModuleException $exception) {
            $this->error("ERROR: Failed to install module with error: {$exception->getMessage()}");
            $this->cleanup();
            return 1;
        }

        $this->info("Module {$newModule->name} ({$newModule->version}) successfully installed!");
        $this->info("It has been installed at {$moduleFolder}/{$newModule->folderName}.");
        $this->cleanup();
        return 0;
    }

    protected function handleExistingModulesWithSameName(array $existingModules, ThemeModuleManager $manager): bool
    {
        if (count($existingModules) === 0) {
            return true;
        }

        $this->warn("The following modules already exist with the same name:");
        foreach ($existingModules as $folder => $module) {
            $this->line("{$module->name} ({$folder}:{$module->version}) - {$module->description}}");
        }
        $this->line('');

        $choices = ['Cancel Module Install', 'Add Alongside Existing'];
        if (count($existingModules) === 1) {
            $choices[] = 'Replace Existing Module';
        }
        $choice = $this->choice("What would you like to do?", $choices, 0, null, false);
        if ($choice === 'Cancel Module Install') {
            return false;
        }

        if ($choice === 'Replace Existing Module') {
            $existingModuleFolder = array_key_first($existingModules);
            $this->info("Replacing existing module in {$existingModuleFolder} folder");
            $manager->deleteModuleFolder($existingModuleFolder);
        }

        return true;
    }

    protected function getModuleFolder(string $themeFolder): string|null
    {
        $path = $themeFolder . DIRECTORY_SEPARATOR . 'modules';
        if (!file_exists($path)) {
            if (!is_dir($path)) {
                $this->error("ERROR: Cannot create a modules folder, file already exists at {$path}");
            }

            $created = mkdir($path, 0755, true);
            if (!$created) {
                $this->error("ERROR: Failed to create a modules folder at {$path}");
            }
        }

        return $path;
    }

    protected function getThemeFolder(): string|null
    {
        $path = theme_path('');
        if (!$path) {
            $shouldCreate = $this->confirm('No active theme folder found, would you like to create one?');
            if (!$shouldCreate) {
                return null;
            }

            $folder = 'custom';
            while (file_exists(base_path("themes" . DIRECTORY_SEPARATOR  . $folder))) {
                $folder = 'custom-' . Str::random(4);
            }

            $path = base_path("themes/{$folder}");
            $created = mkdir($path, 0755, true);
            if (!$created) {
                $this->error('Failed to create a theme folder to use. This may be a permissions issue. Try manually configuring an active theme.');
                return null;
            }

            $this->info("Created theme folder at {$path}");
            $this->warn("You will need to set APP_THEME={$folder} in your BookStack env configuration to enable this theme!");
        }

        return $path;
    }

    protected function validateAndGetModuleInfoFromZip(ThemeModuleZip $zip): ThemeModule|null
    {
        if (!$zip->exists()) {
            $this->error("ERROR: Cannot open ZIP file at {$zip->getPath()}");
            return null;
        }

        if ($zip->getContentsSize() > (50 * 1024 * 1024)) {
            $this->error("ERROR: Module ZIP file is too large. Maximum size is 50MB.");
            return null;
        }

        try {
            $themeModule = $zip->getModuleInstance();
        } catch (ThemeModuleException $exception) {
            $this->error("ERROR: Failed to read module metadata with error: {$exception->getMessage()}");
            return null;
        }

        return $themeModule;
    }

    protected function downloadModuleFile(string $location): string
    {
        $httpRequests = app()->make(HttpRequestService::class);
        $client = $httpRequests->buildClient(30);

        $resp = $client->get($location, ['stream' => true]);

        $tempFile = tempnam(sys_get_temp_dir(), 'bookstack_module_');
        $fileHandle = fopen($tempFile, 'w');

        stream_copy_to_stream($resp->getBody()->detach(), $fileHandle);

        fclose($fileHandle);

        $this->cleanupActions[] = function () use ($tempFile) {
            unlink($tempFile);
        };

        return $tempFile;
    }

    protected function getPathToZip(string $location): string|null
    {
        $lowerLocation = strtolower($location);
        $isRemote = str_starts_with($lowerLocation, 'http://') || str_starts_with($lowerLocation, 'https://');

        if ($isRemote) {
            // Warning about fetching from source
            $host = parse_url($location, PHP_URL_HOST);
            $this->warn("This will download a module from {$host}. Modules can contain code which would have the ability to do anything on the BookStack host server.");
            $trustHost = $this->confirm('Are you sure you trust this source?');
            if (!$trustHost) {
                return null;
            }

            // Check if the connection is http. If so, warn the user.
            if (str_starts_with($lowerLocation, 'http://')) {
                $this->warn('You are downloading a module from an insecure HTTP source. We recommend using HTTPS sources.');
                if (!$this->confirm('Do you wish to continue?')) {
                    return null;
                }
            }

            // Download ZIP and get its location
            return $this->downloadModuleFile($location);
        }

        // Validate file and get full location
        $zipPath = realpath($location);
        if (!$zipPath || !is_file($zipPath)) {
            $this->error("ERROR: Module file not found at {$location}");
            return null;
        }

        return $zipPath;
    }

    protected function cleanup(): void
    {
        foreach ($this->cleanupActions as $action) {
            $action();
        }
    }
}
