<?php

namespace App\Filament\Resources\ClientEventPlannerResource\Pages;

use App\Filament\Resources\ClientEventPlannerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageClientEventPlanners extends ManageRecords
{
    protected static string $resource = ClientEventPlannerResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
