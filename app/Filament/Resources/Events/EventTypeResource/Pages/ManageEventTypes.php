<?php

namespace App\Filament\Resources\Events\EventTypeResource\Pages;

use App\Filament\Resources\Events\EventTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageEventTypes extends ManageRecords
{
    protected static string $resource = EventTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
