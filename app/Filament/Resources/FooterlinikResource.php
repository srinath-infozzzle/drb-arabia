<?php
namespace App\Filament\Resources;
use App\Filament\Resources\FooterlinikResource\Pages;
use App\Filament\Resources\FooterlinikResource\RelationManagers;
use App\Models\Footerlinik;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\SoftDeletingScope;
class FooterlinikResource extends Resource
{
  protected static ?string $model = Footerlinik::class;
  protected static ?string $navigationIcon = "heroicon-o-rectangle-stack";

  
  protected static int $order = 5;

  protected static ?int $navigationSort = 5;
  protected static ?string $navigationLabel = "Footer Links";
  public static function form(Form $form): Form
  {
    return $form->schema([
      TextInput::make('columnno')->numeric(),
      TextInput::make('linktextenglish'),
      TextInput::make('linktextarabic'),
      TextInput::make('linkengurl')->label('Link English'),
      TextInput::make('linkaraburl')->label('Link Arabic'),
    ]);
  }
  public static function table(Table $table): Table
  {
    return $table->columns([
      TextColumn::make('columnno'),
      TextColumn::make('linktextenglish'),
      TextColumn::make('linktextarabic'),
      TextColumn::make('linkengurl'),
      TextColumn::make('linkaraburl'),
    ])->filters([ //
        ])->actions([Tables\Actions\EditAction::make(),])->bulkActions([Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make(),]),]);
  }
  public static function getRelations(): array
  {
    return [ //
    ];
  }
  public static function getPages(): array
  {
    return ['index' => Pages\ListFooterliniks::route('/'), 'create' => Pages\CreateFooterlinik::route('/create'), 'edit' => Pages\EditFooterlinik::route('/{record}/edit'),];
  }
}