<?php

namespace App\Filament\Resources\ClientVendorBookingResource\Widgets;


use App\Models\ClientVendorBooking;
use Filament\Forms;
use Filament\Widgets\Widget;
use Illuminate\Http\Request;
use App\Models\ClientEventPlanner;
use Doctrine\DBAL\Schema\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Hidden;
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;

class BookingCalendar extends FullCalendarWidget
{
    // protected static string $view = 'filament.resources.client-vendor-booking-resource.widgets.booking-calendar';

    /**
     * Return events that should be rendered statically on calendar.
     */
    public function getViewData(): array
    {
        $actual_vid = DB::table('advertisements')
        ->select('actual_v_id')
        ->where('v_id', '=', Auth::id())
        ->value('actual_v_id');

        if(Auth::user()->role_id == 2){
            $bookings = ClientVendorBooking::where('booking_status', 'pending')->where('v_id', $actual_vid)->get();
        }
        if(Auth::user()->role_id == 1){
        $bookings = ClientVendorBooking::where('booking_status', 'booked')->get();
        }


        $events = $bookings->map(function ($booking) {
            return [
                'id' => $booking->id,  // Assuming there's an 'id' field on your bookings.
                'title' => $booking->message,
                // 'client' => $booking->c_name,
                // 'description' => $booking->message,
                'start' => $booking->event_date,
                'url' => Auth::user()->role_id == 2 ? 'http://wedding-bells-1.0.test/admin/client-vendor-bookings/' . $booking->id . '/edit?activeRelationManager=0' : null,
                'shouldOpenInNewTab' => true,
            ];
        })->toArray();

    return $events;
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
