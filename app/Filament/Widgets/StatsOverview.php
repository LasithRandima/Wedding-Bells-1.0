<?php

namespace App\Filament\Widgets;

use Carbon\Carbon;
use App\Models\Advertisement;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use Illuminate\Support\Facades\Auth;

class StatsOverview extends BaseWidget
{
    public static function canView(): bool
    {
        return auth()->user()->role_id === 1;
    }

    protected function getCards(): array
    {
        // Get the current date
        $currentDate = Carbon::now()->toDateString();

        $todaytopAdsCount = Advertisement::where('ad_type', 1)
        ->whereDate('created_at', $currentDate)
        ->count();

        $todayNormalAdsCount = Advertisement::where('ad_type', 0)
        ->whereDate('created_at', $currentDate)
        ->count();

        return [
            Card::make('All Advertisements', Advertisement::all()->count())
            ->description('All the Time'),
            // ->descriptionIcon('heroicon-s-trending-up'),

            Card::make('All Top Ads', Advertisement::where('ad_type', 1)->get()->count())
            ->description('All the Time'),
            // ->description('until today')
            // ->descriptionIcon('heroicon-s-trending-up'),

            Card::make('All Normal Ads', Advertisement::where('ad_type', 0)->get()->count())
            ->description('All the Time'),
            // ->description('until today')
            // ->descriptionIcon('heroicon-s-trending-up'),

            Card::make('Top Ads', $todaytopAdsCount)
            ->description('For today')
            ->descriptionIcon('heroicon-s-trending-up'),

            Card::make('Normal Ads', $todayNormalAdsCount)
            ->description('For today')
            ->descriptionIcon('heroicon-s-trending-up'),

            Card::make('Vendors', User::where('role_id', 2)->get()->count())
            ->description('All Vendors')
            ->descriptionIcon('heroicon-s-trending-up'),

            Card::make('Vendors', User::where('role_id', 2)->whereDate('created_at', $currentDate)->get()->count())
            ->description('For today')
            ->descriptionIcon('heroicon-s-trending-up'),

            Card::make('Customes', User::where('role_id', 3)->get()->count())
            ->description('All Vendors')
            ->descriptionIcon('heroicon-s-trending-up'),

            Card::make('Customers', User::where('role_id', 3)->whereDate('created_at', $currentDate)->get()->count())
            ->description('For today')
            ->descriptionIcon('heroicon-s-trending-up'),

        ];
    }
}
