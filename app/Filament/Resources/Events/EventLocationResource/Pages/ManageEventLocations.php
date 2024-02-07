<?php

namespace App\Filament\Resources\Events\EventLocationResource\Pages;

use App\Filament\Resources\Events\EventLocationResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageEventLocations extends ManageRecords
{
    protected static string $resource = EventLocationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
