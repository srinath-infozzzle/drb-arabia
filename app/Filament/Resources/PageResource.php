<?php
namespace App\Filament\Resources;
use App\Filament\Resources\PageResource\Pages;
use App\Filament\Resources\PageResource\RelationManagers;
use App\Models\Page;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\SoftDeletingScope;
class PageResource extends Resource
{
  protected static ?string $model = Page::class;
  protected static ?string $navigationIcon = "heroicon-o-rectangle-stack";
  protected static ?int $navigationSort = 2;

  public static function canCreate(): bool
  {
      return false; // Prevents the "New" button from being displayed
  }

  public static function form(Form $form): Form
  {
    return $form->schema([
      TextInput::make('pagename'),
      TextInput::make('title'),
      TextInput::make('description'),
      TextInput::make('metadata'),
    ]);
  }
  public static function table(Table $table): Table
  {
    return $table->columns([
      TextColumn::make('pagename'),
      TextColumn::make('title'),
      TextColumn::make('description'),
      TextColumn::make('metadata'),
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
    return ['index' => Pages\ListPages::route('/'), 'create' => Pages\CreatePage::route('/create'), 'edit' => Pages\EditPage::route('/{record}/edit'),];
  }
}