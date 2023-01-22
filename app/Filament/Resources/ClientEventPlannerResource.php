<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use App\Models\ClientEventPlanner;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Hidden;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ClientEventPlannerResource\Pages;
use App\Filament\Resources\ClientEventPlannerResource\RelationManagers;


class ClientEventPlannerResource extends Resource
{
    protected static ?string $model = ClientEventPlanner::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Hidden::make('c_id')
                ->default(Auth::id())
                ->disabled(),
                Forms\Components\TextInput::make('event_title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('event_desc')
                    ->maxLength(255),
                Forms\Components\DatePicker::make('event_date')
                    ->required(),
                Forms\Components\TimePicker::make('event_start_time'),
                Forms\Components\TextInput::make('responsible_person')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('event_title'),
                Tables\Columns\TextColumn::make('event_desc'),
                Tables\Columns\TextColumn::make('event_date')
                    ->date(),
                Tables\Columns\TextColumn::make('event_start_time'),
                Tables\Columns\TextColumn::make('responsible_person'),
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
            'index' => Pages\ListClientEventPlanners::route('/'),
            'create' => Pages\CreateClientEventPlanner::route('/create'),
            'edit' => Pages\EditClientEventPlanner::route('/{record}/edit'),
        ];
    }

    public static function getWidgets(): array
    {
        return [
            ClientEventPlannerResource\Widgets\CalendarWidget::class,
        ];
    }
}
