<?php
namespace App\Filament\Resources;
use App\Filament\Resources\FrontmenuResource\Pages;
use App\Filament\Resources\FrontmenuResource\RelationManagers;
use App\Models\Frontmenu;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Actions\EditAction;


class FrontmenuResource extends Resource
{
  protected static ?string $model = Frontmenu::class;
  protected static ?string $navigationIcon = "heroicon-o-rectangle-stack";
  protected static ?string $navigationLabel = "FrontEnd Menu";
  protected static ?int $navigationSort = 2;

  protected static int $order = 2;


  public static function canCreate(): bool
  {
      return false; // Prevents the "New" button from being displayed
  }


  public static function form(Form $form): Form
  {
    return $form->schema([

      //->hidden(fn (callable $get) => $get('menu') !== 'menutwo')
      TextInput::make('menu')->label('Menu')->disabled(),
      TextInput::make('menunameenglish')->label('Menu English'),
      TextInput::make('menunamearabic')->label('Menu Arabic'),
      TextInput::make('menulevel')->numeric()->label('Menu Level'),

      Select::make('parentmenu')->options(Frontmenu::all()->pluck('menunameenglish', 'id'))->label('Parent Menu'),
    ]);

  }

  public static function table(Table $table): Table
  {
    return $table->columns([
      TextColumn::make('menu')->searchable(),
      TextColumn::make('menunameenglish'),
      TextColumn::make('menunamearabic'),
      TextColumn::make('menulevel'),
      TextColumn::make('parent.menuname'),
    ])->filters([ //
        ])->actions([Tables\Actions\EditAction::make(),])->bulkActions([Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make(),]),    ]);
  }
  public static function getRelations(): array
  {
    return [ //
    ];
  }
  public static function getPages(): array
  {
    return ['index' => Pages\ListFrontmenus::route('/'), 'create' => Pages\CreateFrontmenu::route('/create'), 'edit' => Pages\EditFrontmenu::route('/{record}/edit'),];
  }


}