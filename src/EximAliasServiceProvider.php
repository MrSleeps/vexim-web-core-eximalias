<?php
namespace VEximweb\Core\EximAlias;

use Filament\Panel;
use Illuminate\Support\ServiceProvider;

class EximAliasServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/eximalias.php',
            'eximalias'
        );
        Panel::configureUsing(function (Panel $panel) {
            $panel->plugin(EximAliasPlugin::make());
        });          
    }

    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        //$this->loadViewsFrom(__DIR__ . '/../resources/views', 'eximalias');
        //$this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->publishes([
            __DIR__ . '/../config/eximalias.php' => config_path('eximalias.php'),
        ], 'eximalias-config');

        if ($this->app->runningInConsole()) {
            $this->commands([

            ]);
        }
    }
}
