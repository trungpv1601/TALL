<?php

namespace Trungpv1601\TALL;

use Illuminate\Support\ServiceProvider;
use Trungpv1601\TALL\Commands\CreateCommand;
use Trungpv1601\TALL\Commands\DeleteCommand;
use Trungpv1601\TALL\Commands\IndexCommand;
use Trungpv1601\TALL\Commands\PublishCommand;
use Trungpv1601\TALL\Commands\RemoveCommand;
use Trungpv1601\TALL\Commands\TableCommand;
use Trungpv1601\TALL\Commands\TALLCommand;
use Trungpv1601\TALL\Commands\UpdateCommand;
use Trungpv1601\TALL\Commands\ViewCommand;
use Trungpv1601\TALL\View\Components\Checkbox;
use Trungpv1601\TALL\View\Components\Col;
use Trungpv1601\TALL\View\Components\Input;
use Trungpv1601\TALL\View\Components\Modal;
use Trungpv1601\TALL\View\Components\Row;
use Trungpv1601\TALL\View\Components\SidebarDesktopNav;
use Trungpv1601\TALL\View\Components\SidebarDesktopNavItem;
use Trungpv1601\TALL\View\Components\SidebarMobileNav;
use Trungpv1601\TALL\View\Components\SidebarMobileNavItem;

class TALLServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/TALL.php' => config_path('TALL.php'),
            ], 'tall-config');

            $this->publishes([
                __DIR__.'/../resources/views' => base_path('resources/views/vendor/TALL'),
            ], 'tall-views');

            $this->publishes([
                __DIR__.'/../assets' => base_path(),
            ], 'tall-assets');

            $this->commands([
                PublishCommand::class,
                TALLCommand::class,
                CreateCommand::class,
                UpdateCommand::class,
                DeleteCommand::class,
                IndexCommand::class,
                ViewCommand::class,
                RemoveCommand::class,
                TableCommand::class,
            ]);
        }

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'TALL');

        $this->loadViewComponentsAs('tall', [
            SidebarMobileNav::class,
            SidebarMobileNavItem::class,
            SidebarDesktopNav::class,
            SidebarDesktopNavItem::class,
            Input::class,
            Checkbox::class,
            Modal::class,
            Row::class,
            Col::class,
        ]);
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/TALL.php', 'TALL');
    }
}
