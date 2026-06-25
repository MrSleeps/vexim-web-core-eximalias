<?php

namespace VEximweb\Core\EximAlias\Filament\Resources\Pages;

use VEximweb\Core\EximAlias\Filament\Resources\EximAliasResource;
use Filament\Actions\CreateAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\ListRecords;

class ListEximAliases extends ListRecords
{
    protected static string $resource = EximAliasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
