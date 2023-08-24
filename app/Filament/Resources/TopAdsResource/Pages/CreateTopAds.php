<?php

namespace App\Filament\Resources\TopAdsResource\Pages;

use App\Filament\Resources\TopAdsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTopAds extends CreateRecord
{
    protected static string $resource = TopAdsResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
