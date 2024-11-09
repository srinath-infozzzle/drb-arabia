<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestmonialResource\Pages;
use App\Filament\Resources\TestmonialResource\RelationManagers;
use App\Models\Testmonial;
use Filament\Forms;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TestmonialResource extends Resource
{
    protected static ?string $model = Testmonial::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?int $navigationSort = 4;
    protected static int $order = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name_key')->default('testimonial_name_'.Testmonial::max('id')+1)->readOnly() ,
                TextInput::make('testmonial_key')->default('testimonial_text_'.Testmonial::max('id')+1)->readOnly(),
                TextInput::make('name_en')->label('Name English'),
                TextInput::make('name_ar')->label('Name Arabic'),
                Textarea::make('testmonial_text_en')->label('Testimonial English'),
                Textarea::make('testmonial_text_ar')->label('Testimonial Arabic'),
                Checkbox::make('status')->label('Status'),

                
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
TextColumn::make('name_en')->label('Name English'),
TextColumn::make('name_ar')->label('Name Arabic'),
TextColumn::make('testmonial_text_en')->label('Testmonial English'),

TextColumn::make('testmonial_text_ar')->label('Testmonial Arabic'),
CheckboxColumn::make('status'),




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
            'index' => Pages\ListTestmonials::route('/'),
            'create' => Pages\CreateTestmonial::route('/create'),
            'edit' => Pages\EditTestmonial::route('/{record}/edit'),
        ];
    }
}
