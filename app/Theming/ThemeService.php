<?php

namespace BookStack\Theming;

use BookStack\Access\SocialDriverManager;
use BookStack\Exceptions\ThemeException;
use Illuminate\Console\Application;
use Illuminate\Console\Application as Artisan;
use Illuminate\View\FileViewFinder;
use Symfony\Component\Console\Command\Command;

class ThemeService
{
    /**
     * @var array<string, callable[]>
     */
    protected array $listeners = [];

    /**
     * @var array<string, array<string, int>>
     */
    protected array $beforeViews = [];

    /**
     * @var array<string, array<string, int>>
     */
    protected array $afterViews = [];

    /**
     * Get the currently configured theme.
     * Returns an empty string if not configured.
     */
    public function getTheme(): string
    {
        return config('view.theme') ?? '';
    }

    /**
     * Listen to a given custom theme event,
     * setting up the action to be ran when the event occurs.
     */
    public function listen(string $event, callable $action): void
    {
        if (!isset($this->listeners[$event])) {
            $this->listeners[$event] = [];
        }

        $this->listeners[$event][] = $action;
    }

    /**
     * Dispatch the given event name.
     * Runs any registered listeners for that event name,
     * passing all additional variables to the listener action.
     *
     * If a callback returns a non-null value, this method will
     * stop and return that value itself.
     */
    public function dispatch(string $event, ...$args): mixed
    {
        foreach ($this->listeners[$event] ?? [] as $action) {
            $result = call_user_func_array($action, $args);
            if (!is_null($result)) {
                return $result;
            }
        }

        return null;
    }

    /**
     * Check if there are listeners registered for the given event name.
     */
    public function hasListeners(string $event): bool
    {
        return count($this->listeners[$event] ?? []) > 0;
    }

    /**
     * Register a new custom artisan command to be available.
     */
    public function registerCommand(Command $command): void
    {
        Artisan::starting(function (Application $application) use ($command) {
            $application->addCommands([$command]);
        });
    }

    /**
     * Read any actions from the set theme path if the 'functions.php' file exists.
     */
    public function readThemeActions(): void
    {
        $themeActionsFile = theme_path('functions.php');
        try {
            require $themeActionsFile;
        } catch (\Error $exception) {
            throw new ThemeException("Failed loading theme functions file at \"{$themeActionsFile}\" with error: {$exception->getMessage()}");
        }
    }

    /**
     * Check if a logical theme is active.
     */
    public function logicalThemeIsActive(): bool
    {
        $themeActionsFile = theme_path('functions.php');
        return $themeActionsFile && file_exists($themeActionsFile);
    }

    /**
     * Register any extra paths for where we may expect views to be located
     * with the provided FileViewFinder, to make custom views available for use.
     */
    public function registerViewPathsForTheme(FileViewFinder $finder): void
    {
        $finder->prependLocation(theme_path());
    }

    /**
     * @see SocialDriverManager::addSocialDriver
     */
    public function addSocialDriver(string $driverName, array $config, string $socialiteHandler, ?callable $configureForRedirect = null): void
    {
        $driverManager = app()->make(SocialDriverManager::class);
        $driverManager->addSocialDriver($driverName, $config, $socialiteHandler, $configureForRedirect);
    }

    /**
     * Provide the response for a blade template view include.
     */
    public function handleViewInclude(string $viewPath, array $data = []): string
    {
        $viewsContent = [
            ...$this->renderViewSets($this->beforeViews[$viewPath] ?? [], $data),
            view()->make($viewPath, $data)->render(),
            ...$this->renderViewSets($this->afterViews[$viewPath] ?? [], $data),
        ];

        return implode("\n", $viewsContent);
    }

    /**
     * Register a custom view to be rendered before the given target view is included in the template system.
     */
    public function registerViewToRenderBefore(string $targetView, string $localView, int $priority = 50): void
    {
        $this->registerAdjacentView($this->beforeViews, $targetView, $localView, $priority);
    }

    /**
     * Register a custom view to be rendered after the given target view is included in the template system.
     */
    public function registerViewToRenderAfter(string $targetView, string $localView, int $priority = 50): void
    {
        $this->registerAdjacentView($this->afterViews, $targetView, $localView, $priority);
    }

    protected function registerAdjacentView(array &$location, string $targetView, string $localView, int $priority = 50): void
    {
        $viewPath = theme_path($localView . '.blade.php');
        if (!file_exists($viewPath)) {
            throw new ThemeException("Expected registered view file at \"{$viewPath}\" does not exist");
        }

        if (!isset($location[$targetView])) {
            $location[$targetView] = [];
        }
        $location[$targetView][$viewPath] = $priority;
    }

    /**
     * @param array<string, int> $viewSet
     * @return string[]
     */
    protected function renderViewSets(array $viewSet, array $data): array
    {
        $paths = array_keys($viewSet);
        usort($paths, function (string $a, string $b) use ($viewSet) {
            return $viewSet[$a] <=> $viewSet[$b];
        });

        return array_map(function (string $viewPath) use ($data) {
            return view()->file($viewPath, $data)->render();
        }, $paths);
    }
}
