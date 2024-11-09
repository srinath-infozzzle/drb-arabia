<?php

namespace App\Filament\Resources\FootercolumnResource\Pages;

use App\Filament\Resources\FootercolumnResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Models\Footerlinik;

class EditFootercolumn extends EditRecord
{
    protected static string $resource = FootercolumnResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function afterSave(): void
    {
        // Path to the file you want to create

        $footerlinks=Footerlinik::where('footercolumns_id','=',$this->record->id)->get();
        $i=1;
        foreach( $footerlinks as $footerlink){
            $footerlink->footertextkey="footertext_".$i;
            $footerlink->footerlinkkey="footerlink_".$i;
            $footerlink->save();
            $i=$i+1;



        }
      
        $this->record->linkscount=$i-1;
        $this->record->save();
    }
}
