<?php
namespace App\Filament\Resources;
use App\Filament\Resources\PagecontentResource\Pages;
use App\Filament\Resources\PagecontentResource\RelationManagers;
use App\Models\Pagecontent;
use App\Models\Page;
use App\Models\Section;
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
use Filament\Forms\Components\Textarea;
class PagecontentResource extends Resource
{
  protected static ?string $model = Pagecontent::class;
  protected static ?string $navigationIcon = "heroicon-o-rectangle-stack";
  protected static ?int $navigationSort = 3;
  protected static int $order = 3;

  
  protected static ?string $navigationLabel = "Page Contents";


  public static function canCreate(): bool
  {
      return false; // Prevents the "New" button from being displayed
  }


  public static function form(Form $form): Form
  {
    return $form->schema([

      //->disabled()


      Select::make('page_id')->options(Page::all()->pluck('pagename', 'id'))->label('Page')->disabled(),
      Select::make('section_id')->options(Section::all()->pluck('sectionname', 'id'))->label('Section')->disabled(),
      TextInput::make('contenname')->label('Content Key')->disabled(),
      Textarea::make('contenttextenglish')->label('Content English')->autosize(),
      Textarea::make('contenttextarabic')->label('Content Arabic')->autosize(),


    ]);
  }
  public static function table(Table $table): Table
  {
    return $table->columns([
      TextColumn::make('page.pagename')->searchable(),
      TextColumn::make('section.sectionname')->searchable(),
      TextColumn::make('contenname')->searchable(),
      TextColumn::make('contenttextenglish'),
      TextColumn::make('contenttextarabic'),
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
    return ['index' => Pages\ListPagecontents::route('/'), 'create' => Pages\CreatePagecontent::route('/create'), 'edit' => Pages\EditPagecontent::route('/{record}/edit'),];
  }




}