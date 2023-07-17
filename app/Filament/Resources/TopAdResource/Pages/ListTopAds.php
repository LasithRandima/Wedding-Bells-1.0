<?php

namespace App\Filament\Resources\TopAdResource\Pages;

use App\Filament\Resources\TopAdResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTopAds extends ListRecords
{
    protected static string $resource = TopAdResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
