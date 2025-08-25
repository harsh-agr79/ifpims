<?php

namespace App\Filament\Resources\Pollutions\Pages;

use App\Filament\Resources\Pollutions\PollutionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPollutions extends ListRecords
{
    protected static string $resource = PollutionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
