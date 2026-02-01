<?php

namespace BookStack\Theming;

use BookStack\Exceptions\ThemeException;

class ThemeModule
{
    protected string $name;
    protected string $description;
    protected string $folderName;
    protected string $version;

    /**
     * Create a ThemeModule instance from JSON data.
     *
     * @throws ThemeException
     */
    public static function fromJson(array $data, string $folderName): static
    {
        if (empty($data['name']) || !is_string($data['name'])) {
            throw new ThemeException("Module in folder \"{$folderName}\" is missing a valid 'name' property");
        }

        if (!isset($data['description']) || !is_string($data['description'])) {
            throw new ThemeException("Module in folder \"{$folderName}\" is missing a valid 'description' property");
        }

        if (!isset($data['version']) || !is_string($data['version'])) {
            throw new ThemeException("Module in folder \"{$folderName}\" is missing a valid 'version' property");
        }

        if (!preg_match('/^v?\d+\.\d+\.\d+(-.*)?$/', $data['version'])) {
            throw new ThemeException("Module in folder \"{$folderName}\" has an invalid 'version' format. Expected semantic version format like '1.0.0' or 'v1.0.0'");
        }

        $module = new static();
        $module->name = $data['name'];
        $module->description = $data['description'];
        $module->folderName = $folderName;
        $module->version = $data['version'];

        return $module;
    }

    /**
     * Get a path for a file within this module.
     */
    public function path($path = ''): string
    {
        $component = trim($path, '/');
        return theme_path("modules/{$this->folderName}/{$component}");
    }
}
