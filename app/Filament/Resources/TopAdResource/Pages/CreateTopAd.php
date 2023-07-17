<?php

namespace App\Filament\Resources\TopAdResource\Pages;

use App\Filament\Resources\TopAdResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTopAd extends CreateRecord
{
    protected static string $resource = TopAdResource::class;


    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
