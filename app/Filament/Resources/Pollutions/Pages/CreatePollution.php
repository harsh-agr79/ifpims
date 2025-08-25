<?php

namespace App\Filament\Resources\Pollutions\Pages;

use App\Filament\Resources\Pollutions\PollutionResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePollution extends CreateRecord
{
    protected static string $resource = PollutionResource::class;
}
