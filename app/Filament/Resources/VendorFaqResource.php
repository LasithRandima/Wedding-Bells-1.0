<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\VendorFaq;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Hidden;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\VendorFaqResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\VendorFaqResource\RelationManagers;

class VendorFaqResource extends Resource
{
    protected static ?string $model = VendorFaq::class;

    protected static ?string $navigationIcon = 'heroicon-o-bookmark';

    protected static ?string $navigationGroup = 'Vendor Dashboard';

    public static function getEloquentQuery(): Builder
    {
        return static::getModel()::query()->where('v_id', Auth::id());
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Hidden::make('v_id')
                ->default(Auth::id())
                ->disabled(),
                Forms\Components\MarkdownEditor::make('Question')
                ->required()
                ->maxLength(1000)
                ->columnSpan([
                    'sm' => 2,
            ]),
                Forms\Components\MarkdownEditor::make('Answer')
                ->required()
                ->maxLength(2000)
                ->columnSpan([
                    'sm' => 2,
            ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('Question'),
                Tables\Columns\TextColumn::make('Answer'),
                Tables\Columns\TextColumn::make('created_at')
                ->datetime()
                ->sortable(),
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageVendorFaqs::route('/'),
        ];
    }
}
