<?php

namespace App\Filament\Resources\AdpackageResource\Pages;

use App\Filament\Resources\AdpackageResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAdpackage extends EditRecord
{
    protected static string $resource = AdpackageResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
