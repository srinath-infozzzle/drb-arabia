<?php

namespace App\Filament\Resources\FaqResource\Pages;

use App\Filament\Resources\FaqResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Models\Faq;

class EditFaq extends EditRecord
{
    protected static string $resource = FaqResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function afterSave(): void
    {
        // Path to the file you want to create

        $faqrs=Faq::get();
        $i=1;
        foreach( $faqrs as $faq){
            $faq->question_key="question_".$i;
            $faq->answer_key="answer_".$i;
            $faq->save();
            $i=$i+1;



        }
      
      //  $this->record->faqscount=$i-1;
        $this->record->save();
    }
}
