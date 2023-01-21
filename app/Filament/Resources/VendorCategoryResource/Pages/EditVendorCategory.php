<?php

namespace App\Filament\Resources\VendorCategoryResource\Pages;

use App\Filament\Resources\VendorCategoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVendorCategory extends EditRecord
{
    protected static string $resource = VendorCategoryResource::class;

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
