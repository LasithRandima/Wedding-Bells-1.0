<?php

namespace App\Http\Livewire;


use Filament\Forms;
use App\Models\Vendor;
use Livewire\Component;
use App\Models\VendorCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\HtmlString;
use Filament\Forms\Components\Card;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\MultiSelect;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TagsInput;

class Vendorregister extends Component implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;

    public $vid;
    public $name;
    public $email;
    public $buisness_name;
    public $buisness_location;
    public $Buisness_Description;
    public $v_category;
    public $buisness_branches;
    public $website_url;
    public $telephone_no;
    public $Contact_no;
    // public $user_id = Auth::id();



    // $catagory = DB::select('select * from vendor_categories');


    public function mount(): void
    {
        $this->form->fill();
    }

    protected function getFormSchema(): array
    {
    return [
        Wizard::make()
            ->schema([
                Step::make('Details')
                ->icon('heroicon-o-identification')
                ->description('Tell Us About Your Business')
                ->schema([
                    // Hidden::make('id')
                    // ->default(Auth::user()->id)
                    // ->disabled(),
                    Hidden::make('user_id')
                        ->default(Auth::id())
                        ->disabled(),
                        // TextInput::make('id')
                        // ->default(Auth::id())
                        // ->helperText('Your id.'.Auth::id())
                        // ->label('Personal Id')
                        // ->required(),
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

                    select::make('v_category')
                        ->label('Business Catagory')
                        // ->relationship('v_category', 'Category_name')
                        ->multiple()
                        ->options(VendorCategory::all()->pluck('Category_name', 'Category_name'))
                        // ->preload()
                        ->searchable()
                        ->required(),

                //     TextInput::make('v_bus_branches')
                //         ->label('Business Branches')
                //         ->placeholder('Type as comma separated values -> ex : Colombo , Gampaha'),
                // ]),

                // Repeater::make('v_bus_branches')
                // ->label('Business Branches')
                // ->schema([
                //     TextInput::make('v_bus_branches')
                //     ->label('Business Branches')
                //     ->required(),
                //     ])
                //     ->minItems(1)
                //     ->maxItems(10)
                //     ->collapsible()
                //     ->cloneable()
                //     ->required()
                //     ->columnSpan([
                //         'sm' => 2,
                //         ]),


                TagsInput::make('v_bus_branches')
                    ->label('Business Branches')
                    ->placeholder('Type your Branches one by one'),


                ]),


                    Step::make('Contact_Details')
                    ->icon('heroicon-o-globe-alt')
                    ->description('Where We Can Find You')

                    ->schema([
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

                        ]),

                        ])



                ->columns([
                    'sm' => 2,
                ])
                ->submitAction(new HtmlString('<button type="submit">Submit</button>')),
    ];
    }

    public function submit(): void
    {
        Vendor::create($this->form->getState());
    }

    // public function create(): void
    // {
    //     Vendor::create($this->form->getState());
    // }


    public function render()
    {
        return view('livewire.vendorregister');
    }
}
