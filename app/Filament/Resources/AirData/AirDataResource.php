<?php

namespace App\Filament\Resources\AirData;

use App\Filament\Resources\AirData\Pages\CreateAirData;
use App\Filament\Resources\AirData\Pages\EditAirData;
use App\Filament\Resources\AirData\Pages\ListAirData;
use App\Filament\Resources\AirData\Pages\ViewAirData;
use App\Filament\Resources\AirData\Schemas\AirDataForm;
use App\Filament\Resources\AirData\Schemas\AirDataInfolist;
use App\Filament\Resources\AirData\Tables\AirDataTable;
use App\Models\AirData;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AirDataResource extends Resource
{
    protected static ?string $model = AirData::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Air Data';

    public static function form(Schema $schema): Schema
    {
        return AirDataForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return AirDataInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AirDataTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListAirData::route('/'),
            'create' => CreateAirData::route('/create'),
            'view' => ViewAirData::route('/{record}'),
            'edit' => EditAirData::route('/{record}/edit'),
        ];
    }
}
