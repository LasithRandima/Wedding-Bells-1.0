<?php

namespace App\Filament\Resources;


use App\Models\Adpackage;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

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
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AdpackageResource\Pages;
use App\Filament\Resources\AdpackageResource\RelationManagers;
use App\Models\Advertisement;
use Filament\Forms\Components\Fieldset;

class AdpackageResource extends Resource
{
    protected static ?string $model = Adpackage::class;

    protected static ?string $navigationGroup = 'Vendor Dashboard';
    protected static ?string $label = 'Ad Packages';
    protected static ?string $navigationLabel = 'Ad Packages';

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Hidden::make('v_id')
                ->default(Auth::id())
                ->disabled(),
                Hidden::make('v_bus_name')
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

                Fieldset::make('Advertise')
                // ->relationship('advertise')
                ->schema([
                    Forms\Components\Select::make('ad_id')
                    ->label('Ad Id')
                    ->options(Advertisement::where('v_id', Auth::id())->get()->pluck('ad_title', 'id')->toArray())
                    ->reactive()
                    ->afterStateUpdated(fn (callable $set) => $set('ad_title', null))
                    ->searchable()
                    ->required(),

                    Forms\Components\Select::make('ad_title')
                    ->label('Ad Title')
                    ->options(function(callable $get) {
                        $ads_id = Advertisement::where('id', $get('ad_id'))->get();

                        if(! $ads_id) {
                            return Advertisement::where('v_id', Auth::id())->get()->pluck('ad_title', 'id');
                        }

                        return $ads_id->pluck('ad_title', 'ad_title');

                    })
                    ->searchable()
                    ->required(),
                ]),


                // Forms\Components\Select::make('ad_id')
                //     ->label('Ad Id')
                //     ->options(Advertisement::where('v_id', Auth::id())->get()->pluck('ad_title', 'id')->toArray())
                //     ->reactive()
                //     ->afterStateUpdated(fn (callable $set) => $set('ad_title', null))
                //     ->searchable()
                //     ->required(),

                //     Forms\Components\Select::make('ad_title')
                //     ->label('Ad Title')
                //     ->options(function(callable $get) {
                //         $ads_id = Advertisement::where('id', $get('ad_id'))->get();

                //         if(! $ads_id) {
                //             return Advertisement::where('v_id', Auth::id())->get()->pluck('ad_title', 'id');
                //         }

                //         return $ads_id->pluck('ad_title', 'ad_title');

                //     })
                //     ->searchable()
                //     ->required(),


                Forms\Components\TextInput::make('pkg_name')
                ->label('Package Name')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('price')
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
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('ad_title')
                ->label('Ad Title'),
                Tables\Columns\TextColumn::make('pkg_name')
                ->label('Package Name'),
                Tables\Columns\TextColumn::make('price')
                ->label('Package Price'),
                Tables\Columns\TextColumn::make('pkg_description')
                ->limit(25)
                ->label('Package Description'),
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
            'index' => Pages\ListAdpackages::route('/'),
            'create' => Pages\CreateAdpackage::route('/create'),
            'edit' => Pages\EditAdpackage::route('/{record}/edit'),
        ];
    }
}
