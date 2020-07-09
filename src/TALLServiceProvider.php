<?php

namespace Trungpv1601\TALL;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Trungpv1601\TALL\Commands\CreateCommand;
use Trungpv1601\TALL\Commands\DeleteCommand;
use Trungpv1601\TALL\Commands\TALLCommand;
use Trungpv1601\TALL\Commands\UpdateCommand;
use Trungpv1601\TALL\Commands\ViewAllCommand;
use Trungpv1601\TALL\Commands\ViewCommand;
use Trungpv1601\TALL\View\Components\SidebarMobileNav;
use Trungpv1601\TALL\View\Components\SidebarMobileNavItem;
use Trungpv1601\TALL\View\Components\SidebarDesktopNav;
use Trungpv1601\TALL\View\Components\SidebarDesktopNavItem;

class TALLServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/TALL.php' => config_path('TALL.php'),
            ], 'config');

            $this->publishes([
                __DIR__.'/../resources/views' => base_path('resources/views/vendor/TALL'),
                // __DIR__.'/../stubs/default' => base_path(),
            ], 'views');

            if (! class_exists('CreatePackageTable')) {
                $this->publishes([
                    // __DIR__ . '/../database/migrations/create_TALL_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_TALL_table.php'),
                ], 'migrations');
            }

            $this->commands([
                TALLCommand::class,
                CreateCommand::class,
                UpdateCommand::class,
                DeleteCommand::class,
                ViewAllCommand::class,
                ViewCommand::class,
            ]);
        }

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'TALL');

        $this->registerRoutes();

        $this->loadViewComponentsAs('tall', [
            SidebarMobileNav::class,
            SidebarMobileNavItem::class,
            SidebarDesktopNav::class,
            SidebarDesktopNavItem::class,
        ]);
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/TALL.php', 'TALL');
    }

    protected function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        });
    }

    protected function routeConfiguration()
    {
        return [
            'prefix' => config('TALL.prefix'),
            'middleware' => config('TALL.middleware'),
        ];
    }
}
