<?php

namespace App\Filament\Resources\AirData\Pages;

use App\Filament\Resources\AirData\AirDataResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAirData extends ListRecords
{
    protected static string $resource = AirDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
