<?php

namespace VEximweb\Core\EximAlias\Filament\Resources\Pages;

use VEximweb\Core\EximAlias\Filament\Resources\EximAliasResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditEximAlias extends EditRecord
{
    protected static string $resource = EximAliasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
