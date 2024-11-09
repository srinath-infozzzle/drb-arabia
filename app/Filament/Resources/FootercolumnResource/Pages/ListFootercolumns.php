<?php

namespace App\Filament\Resources\FootercolumnResource\Pages;

use App\Filament\Resources\FootercolumnResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFootercolumns extends ListRecords
{
    protected static string $resource = FootercolumnResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
