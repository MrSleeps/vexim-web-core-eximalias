<?php

namespace VEximweb\Core\EximAlias;

use Filament\Contracts\Plugin;
use Filament\Panel;
use VEximweb\Core\EximAlias\Filament\Resources\EximAliasResource;

class EximAliasPlugin implements Plugin
{
    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());
        return $plugin;
    }       
    
    public function getId(): string
    {
        return 'eximalias';
    }

    public function register(Panel $panel): void
    {
        // Register the Group resource
        $panel->resources([
            EximAliasResource::class,
        ]);
    }

    public function boot(Panel $panel): void
    {
        // Any boot logic
    }   
}
