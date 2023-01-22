<?php

namespace App\Filament\Resources\ClientEventPlannerResource\Pages;

use App\Filament\Resources\ClientEventPlannerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListClientEventPlanners extends ListRecords
{
    protected static string $resource = ClientEventPlannerResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getFooterWidgets(): array
    {
        return [
            ClientEventPlannerResource\Widgets\CalendarWidget::class,
        ];
    }
}
