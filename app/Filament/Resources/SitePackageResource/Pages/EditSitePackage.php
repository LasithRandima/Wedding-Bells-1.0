<?php

namespace App\Filament\Resources\SitePackageResource\Pages;

use App\Filament\Resources\SitePackageResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSitePackage extends EditRecord
{
    protected static string $resource = SitePackageResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }


    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
