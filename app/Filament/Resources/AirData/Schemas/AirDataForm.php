<?php

namespace App\Filament\Resources\AirData\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class AirDataForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('mq1')
                    ->required(),
                TextInput::make('mq2')
                    ->required(),
                TextInput::make('mq3')
                    ->required(),
                TextInput::make('mq4')
                    ->required(),
                TextInput::make('mq5')
                    ->required(),
                TextInput::make('mq6')
                    ->required(),
                TextInput::make('co2')
                    ->required(),
            ]);
    }
}
