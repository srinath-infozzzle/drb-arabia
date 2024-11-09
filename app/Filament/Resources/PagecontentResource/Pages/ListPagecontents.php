<?php

namespace App\Filament\Resources\PagecontentResource\Pages;

use App\Filament\Resources\PagecontentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPagecontents extends ListRecords
{
    protected static string $resource = PagecontentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
