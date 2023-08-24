<?php

namespace App\Filament\Resources\AdpackageResource\Pages;

use App\Filament\Resources\AdpackageResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAdpackages extends ListRecords
{
    protected static string $resource = AdpackageResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
