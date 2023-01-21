<?php

namespace App\Filament\Resources\SitePackageResource\Pages;

use App\Filament\Resources\SitePackageResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSitePackages extends ListRecords
{
    protected static string $resource = SitePackageResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
