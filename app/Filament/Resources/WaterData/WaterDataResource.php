<?php

namespace App\Filament\Resources\WaterData;

use App\Filament\Resources\WaterData\Pages\CreateWaterData;
use App\Filament\Resources\WaterData\Pages\EditWaterData;
use App\Filament\Resources\WaterData\Pages\ListWaterData;
use App\Filament\Resources\WaterData\Schemas\WaterDataForm;
use App\Filament\Resources\WaterData\Tables\WaterDataTable;
use App\Models\WaterData;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class WaterDataResource extends Resource
{
    protected static ?string $model = WaterData::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?int $navigationSort = 4;

    protected static ?string $recordTitleAttribute = 'Water Data';

    public static function form(Schema $schema): Schema
    {
        return WaterDataForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return WaterDataTable::configure($table);
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
            'index' => ListWaterData::route('/'),
            'create' => CreateWaterData::route('/create'),
            'edit' => EditWaterData::route('/{record}/edit'),
        ];
    }
}
