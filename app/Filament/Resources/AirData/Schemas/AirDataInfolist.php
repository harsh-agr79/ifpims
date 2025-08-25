<?php

namespace App\Filament\Resources\AirData\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class AirDataInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('mq1'),
                TextEntry::make('mq2'),
                TextEntry::make('mq3'),
                TextEntry::make('mq4'),
                TextEntry::make('mq5'),
                TextEntry::make('mq6'),
                TextEntry::make('co2'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
