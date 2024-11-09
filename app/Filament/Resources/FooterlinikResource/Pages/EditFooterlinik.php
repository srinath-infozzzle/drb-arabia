<?php

namespace App\Filament\Resources\FooterlinikResource\Pages;

use App\Filament\Resources\FooterlinikResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFooterlinik extends EditRecord
{
    protected static string $resource = FooterlinikResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
