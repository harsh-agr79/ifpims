<?php

namespace App\Filament\Resources\Disasters\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class DisasterForm
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
                    ->directory('disaster')
                    ->disk('public')
                    ->required(),
                TextInput::make('env_reading')
                    ->required(),
                TextInput::make('analysis')
                    ->required(),
            ]);
    }
}
