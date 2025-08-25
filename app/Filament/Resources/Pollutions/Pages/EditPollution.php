<?php

namespace App\Filament\Resources\Pollutions\Pages;

use App\Filament\Resources\Pollutions\PollutionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPollution extends EditRecord
{
    protected static string $resource = PollutionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
