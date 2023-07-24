<?php

namespace App\Filament\Resources\ClientVendorBookingResource\Pages;

use App\Filament\Resources\ClientVendorBookingResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListClientVendorBookings extends ListRecords
{
    protected static string $resource = ClientVendorBookingResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
