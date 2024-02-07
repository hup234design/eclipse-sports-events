<?php

namespace App\Filament\Resources\Events\EventVenueResource\Pages;

use App\Filament\Resources\Events\EventVenueResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageEventVenues extends ManageRecords
{
    protected static string $resource = EventVenueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
