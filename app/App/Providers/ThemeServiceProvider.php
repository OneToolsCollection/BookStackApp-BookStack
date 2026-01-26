<?php

namespace BookStack\App\Providers;

use BookStack\Theming\ThemeEvents;
use BookStack\Theming\ThemeService;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

class ThemeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // Register the ThemeService as a singleton
        $this->app->singleton(ThemeService::class, fn ($app) => new ThemeService());
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Boot up the theme system
        $themeService = $this->app->make(ThemeService::class);

        $viewFactory = $this->app->make('view');
        $themeService->registerViewPathsForTheme($viewFactory->getFinder());

        if ($themeService->logicalThemeIsActive()) {
            $themeService->readThemeActions();
            $themeService->dispatch(ThemeEvents::APP_BOOT, $this->app);
            $viewFactory->share('__theme', $themeService);
            Blade::directive('include', function ($expression) {
                return "<?php echo \$__theme->handleViewInclude({$expression}, array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1])); ?>";
            });
        }
    }
}
