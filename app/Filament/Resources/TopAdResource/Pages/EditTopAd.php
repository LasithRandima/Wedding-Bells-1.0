<?php

namespace App\Filament\Resources\TopAdResource\Pages;

use App\Filament\Resources\TopAdResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTopAd extends EditRecord
{
    protected static string $resource = TopAdResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
