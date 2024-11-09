<?php

namespace App\Filament\Resources\FrontmenuResource\Pages;

use App\Filament\Resources\FrontmenuResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use PHPUnit\Framework\MockObject\NeverReturningMethodException;
use Illuminate\Support\Facades\File;

class EditFrontmenu extends EditRecord
{
    protected static string $resource = FrontmenuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }



    protected function afterSave(): void
    {
        // Path to the file you want to create

        $data1 = $this->record->menu;
        $data2 = $this->record->menunameenglish;

        $path = public_path('../lang/en/menu.php'); // This will create the file in the 'public' directory

        $filedata = file_get_contents($path);
        $filedata = $this->replaceFirstOccurrence($filedata, '<?php', '');
        $filedata = $this->replaceFirstOccurrence($filedata, 'return', '');
        $filedata = $this->replaceFirstOccurrence($filedata, '[', '');
        $filedata = $this->replaceLastOccurrence($filedata, ']', '');
        $filedata = $this->replaceLastOccurrence($filedata, ',', '');
        $filedata = $this->replaceLastOccurrence($filedata, ';', '');
        $filedata = trim($filedata);

        $firstarray = (explode(",", $filedata));
        $seconarray = array();
        $i = 0;
        $isKeyFind = false;
        for ($i = 0; $i < count($firstarray); $i++) {
            $seconarray = explode("=>", $firstarray[$i]);

            if (trim($seconarray[0], '"') == $data1) {
                $firstarray[$i] = $seconarray[0] . '=>' . '"' . $data2 . '"';
                $isKeyFind = true;
                break;
            }
        }
        if (!$isKeyFind) {
            $firstarray[$i] = '"' . $data1 . '"' . '=>' . '"' . $data2 . '"';
        }

        $data3 = '';
        for ($i = 0; $i < count($firstarray); $i++) {
            $data3 = $data3 . $firstarray[$i] . ',';
        }
        $data3 = '<?php return [' . trim($data3) . '];';
        file_put_contents($path, $data3);
//arabic start
$data1 = $this->record->menu;
$data2 = $this->record->menunamearabic;

$path = public_path('../lang/ar/menu.php'); // This will create the file in the 'public' directory

$filedata = file_get_contents($path);
$filedata = $this->replaceFirstOccurrence($filedata, '<?php', '');
$filedata = $this->replaceFirstOccurrence($filedata, 'return', '');
$filedata = $this->replaceFirstOccurrence($filedata, '[', '');
$filedata = $this->replaceLastOccurrence($filedata, ']', '');
$filedata = $this->replaceLastOccurrence($filedata, ',', '');
$filedata = $this->replaceLastOccurrence($filedata, ';', '');
$filedata = trim($filedata);

$firstarray = (explode(",", $filedata));
$seconarray = array();
$i = 0;
$isKeyFind = false;
for ($i = 0; $i < count($firstarray); $i++) {
    $seconarray = explode("=>", $firstarray[$i]);

    if (trim($seconarray[0], '"') == $data1) {
        $firstarray[$i] = $seconarray[0] . '=>' . '"' . $data2 . '"';
        $isKeyFind = true;
        break;
    }
}
if (!$isKeyFind) {
    $firstarray[$i] = '"' . $data1 . '"' . '=>' . '"' . $data2 . '"';
}

$data3 = '';
for ($i = 0; $i < count($firstarray); $i++) {
    $data3 = $data3 . $firstarray[$i] . ',';
}
$data3 = '<?php return [' . trim($data3) . '];';
file_put_contents($path, $data3);







    }


    public function replaceLastOccurrence($haystack, $needle, $replacement)
    {
        // Find the position of the last occurrence of $needle
        $position = strrpos($haystack, $needle);

        if ($position === false) {
            // If $needle is not found, return the original string
            return $haystack;
        }

        // Replace the last occurrence
        return substr_replace($haystack, $replacement, $position, strlen($needle));
    }

    public function replaceFirstOccurrence($haystack, $needle, $replacement)
    {
        // Find the position of the first occurrence of $needle
        $position = strpos($haystack, $needle);

        if ($position === false) {
            // If $needle is not found, return the original string
            return $haystack;
        }

        // Replace the first occurrence
        return substr_replace($haystack, $replacement, $position, strlen($needle));
    }



}


// Data to write
