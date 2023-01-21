<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VendorResource\Pages;
use App\Filament\Resources\VendorResource\RelationManagers;
use App\Models\Vendor;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VendorResource extends Resource
{
    protected static ?string $model = Vendor::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Forms\Components\Select::make('user_id')
                //     ->relationship('user', 'name')
                //     ->required(),
                // Forms\Components\TextInput::make('v_name')
                //     ->required()
                //     ->maxLength(255),
                // Forms\Components\TextInput::make('v_email')
                //     ->email()
                //     ->required()
                //     ->maxLength(255),
                // Forms\Components\TextInput::make('v_bus_name')
                //     ->required()
                //     ->maxLength(255),
                // Forms\Components\Textarea::make('v-description')
                //     ->required()
                //     ->maxLength(65535),
                // Forms\Components\TextInput::make('v_category'),
                // Forms\Components\TextInput::make('v_bus_location')
                //     ->required()
                //     ->maxLength(255),
                // Forms\Components\TextInput::make('v_bus_branches'),
                // Forms\Components\TextInput::make('v_website_url')
                //     ->required()
                //     ->maxLength(255),
                // Forms\Components\TextInput::make('v_phone')
                //     ->tel(),
                // Forms\Components\TextInput::make('map')
                //     ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Tables\Columns\TextColumn::make('user.name'),
                Tables\Columns\TextColumn::make('v_bus_name'),
                Tables\Columns\TagsColumn::make('v_category'),
                Tables\Columns\TextColumn::make('v_name'),
                Tables\Columns\TextColumn::make('v_email'),
                Tables\Columns\TextColumn::make('v-description'),
                Tables\Columns\TextColumn::make('v_bus_location'),
                // Tables\Columns\BadgeColumn::make('v_bus_branches'),
                Tables\Columns\TextColumn::make('v_website_url'),
                // Tables\Columns\TagsColumn::make('v_phone'),
                Tables\Columns\TextColumn::make('map'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
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
            'index' => Pages\ListVendors::route('/'),
            'create' => Pages\CreateVendor::route('/create'),
            'edit' => Pages\EditVendor::route('/{record}/edit'),
        ];
    }
}
