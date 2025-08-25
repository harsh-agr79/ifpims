<?php

namespace App\Filament\Resources\WaterData\Pages;

use App\Filament\Resources\WaterData\WaterDataResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditWaterData extends EditRecord
{
    protected static string $resource = WaterDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
