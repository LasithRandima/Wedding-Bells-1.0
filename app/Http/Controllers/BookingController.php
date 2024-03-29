<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientVendorBooking;

class BookingController extends Controller
{
    public function __invoke($bookingId)
    {

        $booking = ClientVendorBooking::findOrFail($bookingId);
        // dd($bookingId);
        $booking->update(['booking_status' => 'booked']);
        return redirect()->route('clientVendorBookings.index')->with('message', 'Booked successfully.');

        app('debugbar')->info('booking id : '+$booking);
    }
}
