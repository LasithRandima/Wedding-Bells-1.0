<?php

namespace App\Filament\Resources\ClientEventPlannerResource\Pages;

use App\Filament\Resources\ClientEventPlannerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditClientEventPlanner extends EditRecord
{
    protected static string $resource = ClientEventPlannerResource::class;

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
