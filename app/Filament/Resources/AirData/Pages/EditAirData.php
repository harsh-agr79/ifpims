<?php

namespace App\Filament\Resources\AirData\Pages;

use App\Filament\Resources\AirData\AirDataResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditAirData extends EditRecord
{
    protected static string $resource = AirDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
