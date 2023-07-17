<?php

namespace App\Filament\Resources\ClientEventPlannerResource\Pages;

use App\Filament\Resources\ClientEventPlannerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateClientEventPlanner extends CreateRecord
{
    protected static string $resource = ClientEventPlannerResource::class;


    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
