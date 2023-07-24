<?php

namespace App\Filament\Resources\TopAdsResource\Pages;

use App\Filament\Resources\TopAdsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTopAds extends ListRecords
{
    protected static string $resource = TopAdsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
