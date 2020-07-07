<?php

namespace Trungpv1601\TALL;

use Illuminate\Support\ServiceProvider;
use Trungpv1601\TALL\Commands\TALLCommand;
use Trungpv1601\TALL\Commands\CreateCommand;
use Trungpv1601\TALL\Commands\DeleteCommand;
use Trungpv1601\TALL\Commands\UpdateCommand;
use Trungpv1601\TALL\Commands\ViewAllCommand;
use Trungpv1601\TALL\Commands\ViewCommand;

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
                ViewCommand::class
            ]);
        }

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'TALL');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/TALL.php', 'TALL');
    }
}
