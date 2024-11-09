<?php

namespace App\Filament\Resources\FootertitleResource\Pages;

use App\Filament\Resources\FootertitleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFootertitle extends EditRecord
{
    protected static string $resource = FootertitleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
