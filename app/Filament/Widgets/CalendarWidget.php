<?php

namespace App\Filament\Widgets;


// use Filament\Forms;
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;
// use Filament\Widgets\Widget;

// class CalendarWidget extends Widget
// {
//     // protected static string $view = 'filament.widgets.calendar-widget';
// }



class CalendarWidget extends FullCalendarWidget
{


    /**
     * Return events that should be rendered statically on calendar.
     */
    public function getViewData(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Breakfast!',
                'description' => 'ssssssssssssssssssssss',
                'start' => now()
            ],
            [
                'id' => 2,
                'title' => 'Meeting with Pamela',
                'start' => now()->addDay(),
                'url' => 'https://some-url.com',
                'shouldOpenInNewTab' => true,
            ]
        ];
    }

    /**
     * FullCalendar will call this function whenever it needs new event data.
     * This is triggered when the user clicks prev/next or switches views on the calendar.
     */



//      protected static function getCreateEventFormSchema(): array
// {
//     return [
//         Forms\Components\TextInput::make('title')
//             ->required(),
//         Forms\Components\DatePicker::make('start')
//             ->required(),
//         Forms\Components\TimePicker::make('start_time')
//             ->required(),
//         Forms\Components\DatePicker::make('end')
//             ->default(null),
//     ];
// }




    public function fetchEvents(array $fetchInfo): array
    {
        // You can use $fetchInfo to filter events by date.
        return [];
    }
}
