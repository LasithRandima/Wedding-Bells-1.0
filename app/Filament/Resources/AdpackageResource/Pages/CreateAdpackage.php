<?php

namespace App\Filament\Resources\AdpackageResource\Pages;

use App\Filament\Resources\AdpackageResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAdpackage extends CreateRecord
{
    protected static string $resource = AdpackageResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
