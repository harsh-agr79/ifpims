<?php

namespace App\Filament\Resources\AirData\Pages;

use App\Filament\Resources\AirData\AirDataResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewAirData extends ViewRecord
{
    protected static string $resource = AirDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
