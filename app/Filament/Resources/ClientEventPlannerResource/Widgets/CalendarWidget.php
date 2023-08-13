<?php

namespace App\Filament\Resources\ClientEventPlannerResource\Widgets;

use Filament\Forms;
use Filament\Widgets\Widget;
use Illuminate\Http\Request;
use App\Models\ClientEventPlanner;
use Doctrine\DBAL\Schema\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Hidden;
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;

// $data = DB::select('select * from client_event_planners');




class CalendarWidget extends FullCalendarWidget
{
    // use Forms\Concerns\InteractsWithForms;


    // protected static string $view = 'filament.resources.client-event-planner-resource.widgets.calendar-widget';


    /**
     * FullCalendar will call this function whenever it needs new event data.
     * This is triggered when the user clicks prev/next or switches views on the calendar.
     */


        public function createEvent(array $data):void
    {

    }





    // protected static function getCreateEventFormSchema(): array
    // {
    //     return [

    //             Hidden::make('c_id')
    //             ->default(Auth::id())
    //             ->disabled(),
    //             Forms\Components\TextInput::make('event_title')
    //                 ->required()
    //                 ->maxLength(255),
    //             Forms\Components\TextInput::make('event_desc')
    //                 ->maxLength(255),
    //             Forms\Components\DatePicker::make('event_date')
    //                 ->required(),
    //             Forms\Components\TimePicker::make('event_start_time'),
    //             Forms\Components\TextInput::make('responsible_person')
    //                 ->maxLength(255),




    //     ];


    // }

    // public function submit(): void
    // {
    //     ClientEventPlanner::create($this->form->getState());

    // }


    // public function fetchEvents(array $fetchInfo): array
    // {
    //     // You can use $fetchInfo to filter events by date.
    //     return [$fetchInfo];
    // }



    public function getViewData(): array
    {
        $data = DB::select('select * from client_event_planners');


        return $data;
    }
}
