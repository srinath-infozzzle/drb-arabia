<?php

namespace App\Filament\Resources\FootertitleResource\Pages;

use App\Filament\Resources\FootertitleResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFootertitles extends ListRecords
{
    protected static string $resource = FootertitleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
