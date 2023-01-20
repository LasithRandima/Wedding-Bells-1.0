<?php

namespace App\Filament\Resources\VendorFaqResource\Pages;

use App\Filament\Resources\VendorFaqResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageVendorFaqs extends ManageRecords
{
    protected static string $resource = VendorFaqResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
