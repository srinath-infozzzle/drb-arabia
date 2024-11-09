<?php
namespace App\Filament\Resources;
use App\Filament\Resources\SectionResource\Pages;
use App\Filament\Resources\SectionResource\RelationManagers;
use App\Models\Section;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\SoftDeletingScope;
class SectionResource extends Resource
{
  protected static ?string $model = Section::class;
  protected static ?string $navigationIcon = "heroicon-o-rectangle-stack";

  protected static ?int $navigationSort = 3;

  public static function form(Form $form): Form
  {
    return $form->schema([TextInput::make('sectionname'),]);
  }

  public static function canCreate(): bool
  {
      return false; // Prevents the "New" button from being displayed
  }

  public static function table(Table $table): Table
  {
    return $table->columns([TextColumn::make('sectionname'),])->filters([ //
    ])->actions([Tables\Actions\EditAction::make(),])->bulkActions([Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make(),]),]);
  }
  public static function getRelations(): array
  {
    return [ //
    ];
  }
  public static function getPages(): array
  {
    return ['index' => Pages\ListSections::route('/'), 'create' => Pages\CreateSection::route('/create'), 'edit' => Pages\EditSection::route('/{record}/edit'),];
  }
}