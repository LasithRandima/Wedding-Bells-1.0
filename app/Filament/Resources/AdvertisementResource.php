<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use App\Models\Advertisement;
use Filament\Resources\Table;
use App\Models\VendorCategory;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Hidden;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AdvertisementResource\Pages;
use App\Filament\Resources\AdvertisementResource\RelationManagers;

class AdvertisementResource extends Resource
{
    protected static ?string $model = Advertisement::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Hidden::make('v_id')
                ->default(Auth::id())
                ->disabled(),
                Forms\Components\TextInput::make('ad_title')
                    ->required()
                    ->maxLength(255)
                    ->columnSpan([
                        'sm' => 2,
                ]),
                Forms\Components\MarkdownEditor::make('about')
                    ->required()
                    ->maxLength(400)
                    ->columnSpan([
                        'sm' => 2,
                    ]),
                Forms\Components\MarkdownEditor::make('service_offered')
                    ->required()
                    ->maxLength(255)
                    ->columnSpan([
                        'sm' => 2,
                    ]),
                Forms\Components\MarkdownEditor::make('v_package_details')
                    ->required()
                    ->maxLength(255)
                    ->columnSpan([
                        'sm' => 2,
                    ]),

                Forms\Components\FileUpload::make('ad_image')
                    ->default('images/favicon/favicon 01.png'),

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
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\ImageColumn::make('ad_image'),
                Tables\Columns\TextColumn::make('ad_title')
                    ->label("Ad Title")
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('about')
                    ->searchable(),
                Tables\Columns\TextColumn::make('service_offered'),
                Tables\Columns\TextColumn::make('v_package_details')
                    ->label("Package"),
                Tables\Columns\TextColumn::make('category_id'),
                Tables\Columns\TextColumn::make('discount_deal'),
                Tables\Columns\TextColumn::make('start_price'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'create' => Pages\CreateAdvertisement::route('/create'),
            'edit' => Pages\EditAdvertisement::route('/{record}/edit'),
        ];
    }
}
