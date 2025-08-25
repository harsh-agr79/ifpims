<?php

namespace App\Filament\Resources\Pollutions\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PollutionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('area')
                    ->required(),
                TextInput::make('longitude')
                    ->required(),
                TextInput::make('lattitude')
                    ->required(),
                FileUpload::make('image')
                    ->image()
                    ->disk('public')
                    ->directory('pollution')
                    ->required(),
                TextInput::make('env_reading')
                    ->required(),
                TextInput::make('analysis')
                    ->required(),
            ]);
    }
}
