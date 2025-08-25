<?php

namespace App\Filament\Resources\WaterData\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class WaterDataForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('created_date')
                    ->required(),
                TextInput::make('water_ph')
                    ->required(),
                TextInput::make('TDS')
                    ->required(),
                TextInput::make('water_temp')
                    ->required(),
            ]);
    }
}
