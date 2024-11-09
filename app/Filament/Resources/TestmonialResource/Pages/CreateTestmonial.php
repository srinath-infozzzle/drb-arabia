<?php

namespace App\Filament\Resources\TestmonialResource\Pages;

use App\Filament\Resources\TestmonialResource;
use App\Models\Testmonial;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTestmonial extends CreateRecord
{
    protected static string $resource = TestmonialResource::class;


 
    protected function mutateFormDataBeforeSave(array $data): array
    {
        $newid=Testmonial::max('id')+1;
        $data['name_key'] = 'testimonial_name_'.$newid;
        $data['testmonial_key'] = 'testimonial_text_'.$newid;

      
        return $data;
    }


    protected function beforeSave(): void
    {
        $newid=Testmonial::max('id')+1;
        $this->record->name_key='testimonial_name_'.$newid;
       // $data['name_key'] = 'testimonial_name_'.$newid;
       // $data['testmonial_key'] = 'testimonial_text_'.$newid;

     
        
    }



}
