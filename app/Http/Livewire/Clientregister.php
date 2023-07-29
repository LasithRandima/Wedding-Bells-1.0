<?php

namespace App\Http\Livewire;
use Filament\Notifications\Notification;

use Filament\Forms;
use App\Models\Client;
use Livewire\Component;
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
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\MarkdownEditor;
use HusamTariq\FilamentTimePicker\Forms\Components\TimePickerField;

class Clientregister extends Component implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;

    public $c_name;

    // $clientuser = DB::select("select * from users where id = ?", Auth::id());

    public function mount(): void
    {
        $this->form->fill();
    }

    protected function getFormSchema(): array
    {
        // $clientuser = DB::select("select * from users where id = ?", Auth::id());
    return [
        Wizard::make()
            ->schema([
                Step::make('Details')
                ->icon('heroicon-o-identification')
                ->description('Tell Us About You')
                ->schema([
                    // Hidden::make('id')
                    // ->default(Auth::id())
                    // ->disabled(),
                    Hidden::make('user_id')
                        ->default(Auth::id())
                        ->disabled(),
                    TextInput::make('c_name')
                        ->default(Auth::user()->name)
                        ->helperText('Your full name here, including any middle names.')
                        ->label('Full Name')
                        ->required(),
                    TextInput::make('C_email')
                        ->default(Auth::user()->email)
                        ->email()
                        ->label('Email')
                        ->unique()
                        ->required()
                        ->email(),
                    TextInput::make('partner_name')
                        ->label('Partner Name')
                        ->placeholder('Partner full name here, including any middle names.'),
                    TextInput::make('partner_email')
                        ->email()
                        ->label('Partner Email')
                        ->placeholder('Partner Email'),
                    TextInput::make('c_location')
                        ->label('Your Address')
                        ->placeholder('Your Address')
                        ->columnSpan([
                            'sm' => 2,
                            ]),
                    Repeater::make('c_tpno')
                        ->label('Contact Numbers')
                        ->schema([
                        TextInput::make('c_tpno')
                        ->label('Contact Number')
                        ->tel(),
                    ])
                        ->minItems(1)
                        ->maxItems(3)
                        ->collapsible()
                        ->cloneable()
                        ->required()
                        ->columnSpan([
                        'sm' => 2,
                        ]),


                ]),

                    Step::make('Wedding details')
                    ->icon('heroicon-o-globe-alt')
                    ->description('Where We Can Find You')

                    ->schema([
                        TextInput::make('guest_count')
                        ->numeric()
                        ->minLength(1)
                        ->placeholder('Guest Count'),
                        DatePicker::make('wed_date')
                            ->label('Wedding Date')
                            ->minDate(now())
                            ->weekStartsOnMonday(),

                        TimePicker::make('wed_start_time')
                            ->label('Wedding Start Time'),
                        // TimePickerField::make('wed_start_time')->label('Wedding Start Time')->okLabel("Confirm")->cancelLabel("Cancel"),
                        TimePicker::make('wed_end_time')
                            ->label('Wedding End Time'),

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
        Notification::make()
        ->title('Registration successfully')
        ->success()
        ->send();
        Client::create($this->form->getState());
    }

    // public function create(): void
    // {
    //     Vendor::create($this->form->getState());
    // }



    public function render()
    {
        return view('livewire.clientregister');
    }
}
