<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AdvertisementsResource\Pages;
use App\Filament\Resources\AdvertisementsResource\RelationManagers;
use App\Models\Advertisement;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use App\Models\VendorCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Repeater;
use Filament\Tables\Columns\TagsColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Filters\SelectFilter;
use Filament\Navigation\NavigationItem;
use Filament\Tables\Columns\BadgeColumn;


class AdvertisementsResource extends Resource
{



    protected static ?string $model = Advertisement::class;
    protected static ?string $navigationGroup = 'Vendor Dashboard';
    protected static ?string $label = 'Advertisements';
    protected static ?string $navigationLabel = 'Advertisements';
    public static ?string $slug = 'adsnew';

    protected static ?string $navigationIcon = 'heroicon-o-collection';




    public static function getEloquentQuery(): Builder
    {
        return static::getModel()::query()->where('v_id', Auth::id())->where('ad_type', 0);
    }

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Hidden::make('v_id')
            ->default(Auth::id())
            ->disabled(),
            Hidden::make('vBusinessName')
            ->default(DB::table('vendors')
            ->select('v_bus_name')
            ->where('user_id', '=', Auth::id())
            ->value('v_bus_name'))
            ->disabled(),
            Hidden::make('actual_v_id')
            ->default(DB::table('vendors')
            ->select('id')
            ->where('user_id', '=', Auth::id())
            ->value('id'))
            ->disabled(),
            Forms\Components\TextInput::make('ad_title')
                ->required()
                ->maxLength(255)
                ->columnSpan([
                    'sm' => 2,
            ]),
            Forms\Components\RichEditor::make('about')
                ->required()
                ->maxLength(1000)
                ->columnSpan([
                    'sm' => 2,
                ]),
            Forms\Components\RichEditor::make('service_offered')
                ->required()
                ->maxLength(1000)
                ->columnSpan([
                    'sm' => 2,
                ]),
            Forms\Components\RichEditor::make('v_package_details')
                ->required()
                ->maxLength(255)
                ->columnSpan([
                    'sm' => 2,
                ]),

            Forms\Components\FileUpload::make('ad_image'),

            Forms\Components\Select::make('category_id')
                ->label('Ad Category')
                // ->multiple()
                ->options(VendorCategory::all()->pluck('Category_name', 'id'))
                ->searchable()
                ->required(),
            Forms\Components\TextInput::make('discount_deal')
                ->maxLength(255),
            Forms\Components\TextInput::make('start_price')
                ->required()
                ->maxLength(255)
                ->minLength(1),
            Forms\Components\TextInput::make('v_bus_location')
                ->label('Business Location')
                ->placeholder('Business Location')
                ->required(),
            TagsInput::make('v_bus_branches')
                ->label('Business Branches')
                ->placeholder('Type your Branches one by one'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                 // Tables\Columns\TextColumn::make('id'),
                 TextColumn::make('index')->rowIndex(),
                 Tables\Columns\ImageColumn::make('ad_image'),
                 Tables\Columns\TextColumn::make('ad_title')
                     ->label("Ad Title")
                     ->limit(25)
                     ->sortable()
                     ->searchable(),
                 Tables\Columns\TextColumn::make('about')
                     ->limit(25)
                     ->searchable(),
                 Tables\Columns\TextColumn::make('v_bus_location')
                     ->label('Buisness Location'),
                 Tables\Columns\TagsColumn::make('v_bus_branches')
                     ->label('Branches'),
                 Tables\Columns\TextColumn::make('service_offered')
                     ->limit(35),
                 Tables\Columns\TextColumn::make('v_package_details')
                     ->label("Package"),
                 Tables\Columns\TextColumn::make('category_id'),
                 Tables\Columns\TextColumn::make('discount_deal')
                     ->limit(25),
                 Tables\Columns\TextColumn::make('start_price'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListAdvertisements::route('/'),
            'create' => Pages\CreateAdvertisements::route('/create'),
            'edit' => Pages\EditAdvertisements::route('/{record}/edit'),
        ];
    }



}
