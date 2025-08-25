<?php

namespace App\Filament\Resources\Pollutions;

use App\Filament\Resources\Pollutions\Pages\CreatePollution;
use App\Filament\Resources\Pollutions\Pages\EditPollution;
use App\Filament\Resources\Pollutions\Pages\ListPollutions;
use App\Filament\Resources\Pollutions\Schemas\PollutionForm;
use App\Filament\Resources\Pollutions\Tables\PollutionsTable;
use App\Models\Pollution;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PollutionResource extends Resource
{
    protected static ?string $model = Pollution::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Pollution';

    public static function form(Schema $schema): Schema
    {
        return PollutionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PollutionsTable::configure($table);
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
            'index' => ListPollutions::route('/'),
            'create' => CreatePollution::route('/create'),
            'edit' => EditPollution::route('/{record}/edit'),
        ];
    }
}
