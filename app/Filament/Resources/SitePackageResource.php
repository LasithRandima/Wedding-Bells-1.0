<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SitePackageResource\Pages;
use App\Filament\Resources\SitePackageResource\RelationManagers;
use App\Models\SitePackage;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SitePackageResource extends Resource
{
    protected static ?string $model = SitePackage::class;

    protected static ?string $navigationGroup = 'Admin Dashboard';

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('pkg_name')
                    ->label('Package Name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('pkg_duration')
                    ->label('Package Duration')
                    ->helperText('Type Number of Months')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('pkg_price')
                    ->label('Package Price')
                    ->numeric()
                    ->minValue(1)
                    ->required(),
                Forms\Components\MarkdownEditor::make('pkg_description')
                    ->label('Package Description')
                    ->required()
                    ->maxLength(3000)
                    ->columnSpan([
                        'sm' => 2,
                ]),
                Forms\Components\TextInput::make('image_limit')
                    ->required(),
                Forms\Components\TextInput::make('ads_limit')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('pkg_name')
                ->label('Package Name'),
                Tables\Columns\TextColumn::make('pkg_duration')
                ->label('Package Duration'),
                Tables\Columns\TextColumn::make('pkg_price')
                ->label('Package Price'),
                Tables\Columns\TextColumn::make('pkg_description')
                ->label('Package Description'),
                Tables\Columns\TextColumn::make('image_limit'),
                Tables\Columns\TextColumn::make('ads_limit'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('d-M-Y'),
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
            'index' => Pages\ListSitePackages::route('/'),
            'create' => Pages\CreateSitePackage::route('/create'),
            'edit' => Pages\EditSitePackage::route('/{record}/edit'),
        ];
    }
}
