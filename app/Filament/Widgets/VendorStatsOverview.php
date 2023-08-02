<?php

namespace App\Filament\Widgets;

use Carbon\Carbon;
use App\Models\Advertisement;
use App\Models\ClientVendorBooking;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VendorStatsOverview extends BaseWidget
{
    public static function canView(): bool
    {
        return auth()->user()->role_id === 2;
    }



    protected function getCards(): array
    {
        $currentDate = Carbon::now()->toDateString();
        $actual_vid = DB::table('advertisements')
        ->select('actual_v_id')
        ->where('v_id', '=', Auth::id())
        ->value('actual_v_id');

        return [
            Card::make('My Ads', Advertisement::where('v_id', Auth::id())->get()->count())
            ->description('All The Time')
            ->descriptionIcon('heroicon-s-trending-up'),

            Card::make('All Bookings Requests', ClientVendorBooking::where('v_id', $actual_vid)->get()->count())
            ->description('All The Time')
            ->descriptionIcon('heroicon-s-trending-up'),

            Card::make(' All Bookings', ClientVendorBooking::where('v_id', $actual_vid)->where('booking_status', 'booked')->get()->count())
            ->description('All The Time')
            ->descriptionIcon('heroicon-s-trending-up'),

            Card::make('Bookings Requests', ClientVendorBooking::where('v_id', $actual_vid)->whereDate('created_at', $currentDate)->get()->count())
            ->description('For Today')
            ->descriptionIcon('heroicon-s-trending-up'),

            Card::make('Pending Bookings Requests', ClientVendorBooking::where('v_id', $actual_vid)->where('booking_status', 'pending')->whereDate('created_at', $currentDate)->get()->count())
            ->description('For Today')
            ->descriptionIcon('heroicon-s-trending-up'),

            Card::make('Total Booked', ClientVendorBooking::where('v_id', $actual_vid)->where('booking_status', 'booked')->whereDate('created_at', $currentDate)->get()->count())
            ->description('For Today')
            ->descriptionIcon('heroicon-s-trending-up'),

            Card::make('Pending Bookings Requests', ClientVendorBooking::where('v_id', $actual_vid)->where('booking_status', 'pending')->whereDate('created_at', $currentDate)->get()->count())
            ->description('For Today')
            ->descriptionIcon('heroicon-s-trending-up'),
        ];
    }
}
