<?php

namespace App\Filament\Resources\TestmonialResource\Pages;

use App\Filament\Resources\TestmonialResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTestmonial extends EditRecord
{
    protected static string $resource = TestmonialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
