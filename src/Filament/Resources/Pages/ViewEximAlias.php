<?php

namespace VEximweb\Core\EximAlias\Filament\Resources\Pages;

use VEximweb\Core\EximAlias\Filament\Resources\EximAliasResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewEximAlias extends ViewRecord
{
    protected static string $resource = EximAliasResource::class;
    
    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}