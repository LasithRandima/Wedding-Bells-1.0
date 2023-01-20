<?php

namespace App\Filament\Resources\VendorCategoryResource\Pages;

use App\Filament\Resources\VendorCategoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVendorCategories extends ListRecords
{
    protected static string $resource = VendorCategoryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
