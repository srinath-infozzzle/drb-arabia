<?php

namespace App\Filament\Resources\FrontmenuResource\Pages;

use App\Filament\Resources\FrontmenuResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFrontmenus extends ListRecords
{
    protected static string $resource = FrontmenuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
