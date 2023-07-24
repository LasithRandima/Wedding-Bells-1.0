<?php

namespace App\Filament\Resources\ClientVendorBookingResource\RelationManagers;

use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\Advertisement;

class AdvertisementRelationManager extends RelationManager
{
    protected static string $relationship = 'advertisement';

    protected static ?string $recordTitleAttribute = 'id';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('ad_title')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('index')->rowIndex(),
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
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}
