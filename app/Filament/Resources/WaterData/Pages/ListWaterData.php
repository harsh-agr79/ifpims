<?php

namespace App\Filament\Resources\WaterData\Pages;

use App\Filament\Resources\WaterData\WaterDataResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListWaterData extends ListRecords
{
    protected static string $resource = WaterDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
