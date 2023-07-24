<?php

namespace App\Filament\Resources\AdvertisementsResource\Pages;

use App\Filament\Resources\AdvertisementsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAdvertisements extends ListRecords
{
    protected static string $resource = AdvertisementsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
