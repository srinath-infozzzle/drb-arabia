<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FootercolumnResource\Pages;
use App\Filament\Resources\FootercolumnResource\RelationManagers;
use App\Models\Footercolumn;
use Filament\Forms;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Repeater;
class FootercolumnResource extends Resource
{
    protected static ?string $model = Footercolumn::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema(components: [
                TextInput::make('column_name_english')->label('Column_Title_English')->required(),
                TextInput::make('column_name_arabic')->label('Column_Title_Arabic')->required(),
                Checkbox::make('status')->label('Status'),

                Section::make('Footer Links')->schema([
                    Repeater::make('footerlinks')->relationship()->schema([

                        TextInput::make('linktextenglish')->label('Link Text English')->required(),
                        TextInput::make('linktextarabic')->label('Link Text Arabic')->required(),
                        TextInput::make('linkengurl')->label('Link English')->required(),
                        TextInput::make('linkaraburl')->label('Link Arabic')->required(),
                        Checkbox::make('status')->label('Status'),


                    ])->columns(4)->label("Footer Links"),

                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('column_name_english')->label('Column_Title_English'),
                TextColumn::make('column_name_arabic')->label('Column_Title_Arabic'),
                CheckboxColumn::make('status')->label('Status'),


                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFootercolumns::route('/'),
            'create' => Pages\CreateFootercolumn::route('/create'),
            'edit' => Pages\EditFootercolumn::route('/{record}/edit'),
        ];
    }
}
