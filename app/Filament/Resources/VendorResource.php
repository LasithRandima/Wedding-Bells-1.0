<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Vendor;
use Filament\Resources\Form;
use Filament\Resources\Table;
use App\Models\VendorCategory;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\MarkdownEditor;
use App\Filament\Resources\VendorResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\VendorResource\RelationManagers;

class VendorResource extends Resource
{
    protected static ?string $model = Vendor::class;

    protected static ?string $navigationGroup = 'Admin Dashboard';

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
                // TextInput::make('id')
                // ->default(Auth::id())
                // ->helperText('Your full name here, including any middle names.')
                // ->label('Personal Id')
                // ->required(),

                // ->disabled(),

                // Hidden::make('v_id')
                // ->default(Auth::id())
                // ->disabled(),

                Hidden::make('user_id')
                ->default(Auth::id())
                ->disabled(),

                TextInput::make('v_name')
                        ->default(Auth::user()->name)
                        ->helperText('Your full name here, including any middle names.')
                        ->label('Personal Name')
                        ->required(),
                    TextInput::make('v_email')
                        ->default(Auth::user()->email)
                        ->email()
                        ->label('Business Email')
                        ->unique()
                        ->required()
                        ->email(),
                    TextInput::make('v_bus_name')
                        ->label('Business Name')
                        ->placeholder('Your full name here, including any middle names.')
                        ->required(),
                    TextInput::make('v_bus_location')
                        ->label('Business Location')
                        ->placeholder('Business Location')
                        ->required(),
                    MarkdownEditor::make('v-description')
                        ->label("Business Description")
                        ->placeholder("Business Description")
                        ->required()
                        ->columnSpan([
                            'sm' => 2,
                    ]),

                    Select::make('v_category')
                        ->label('Business Catagory')
                        // ->relationship('v_category', 'Category_name')
                        ->multiple()
                        ->options(VendorCategory::all()->pluck('Category_name', 'Category_name'))
                        // ->preload()
                        ->searchable()
                        ->required(),


                    TagsInput::make('v_bus_branches')
                        ->label('Business Branches')
                        ->placeholder('Type your Branches one by one'),


                    TextInput::make('v_website_url')
                        ->label('Website URL')
                        ->url()
                        ->prefixIcon('heroicon-s-external-link')
                        ->prefix('https://')
                        ->placeholder('Your website URL')
                        ->columnSpan([
                            'sm' => 2,
                            ]),
                    TextInput::make('map')
                        ->placeholder('Google Map URL')
                        ->columnSpan([
                            'sm' => 2,
                            ]),
                    Repeater::make('v_phone')
                        ->label('Contact Numbers')
                        ->schema([
                        TextInput::make('v_phone')
                        ->label('Contact Number')
                        ->tel()
                        ->required(),
                    ])
                        ->minItems(1)
                        ->maxItems(3)
                        ->collapsible()
                        ->cloneable()
                        ->required()

                        ]);





    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Tables\Columns\TextColumn::make('user.name'),
                Tables\Columns\TextColumn::make('v_bus_name')
                    ->label('Buisness Name'),
                Tables\Columns\TagsColumn::make('v_category')
                    ->label('Catagory'),
                Tables\Columns\TextColumn::make('v_name')
                    ->label('Vendor Name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('v_email')
                    ->label('Email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('v-description')
                    ->label('Description'),
                Tables\Columns\TextColumn::make('v_bus_location')
                    ->label('Buisness Location'),
                Tables\Columns\TagsColumn::make('v_bus_branches')
                    ->label('Branches'),
                Tables\Columns\TextColumn::make('v_website_url')
                    ->label('Website URL'),
                // Tables\Columns\TagsColumn::make('v_phone'),
                Tables\Columns\TextColumn::make('map'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
            ])
            ->filters([
                // SelectFilter::make('v_bus_location')
                // ->multiple()
                // ->label('Buisness Location')
                // ->options(Vendor::all()->pluck('v_bus_location', 'v_bus_location')),
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
            'index' => Pages\ListVendors::route('/'),
            'create' => Pages\CreateVendor::route('/create'),
            'edit' => Pages\EditVendor::route('/{record}/edit'),
        ];
    }
}
