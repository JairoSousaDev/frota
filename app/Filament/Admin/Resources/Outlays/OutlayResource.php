<?php

namespace App\Filament\Admin\Resources\Outlays;

use App\Filament\Admin\Resources\Outlays\Pages\CreateOutlay;
use App\Filament\Admin\Resources\Outlays\Pages\EditOutlay;
use App\Filament\Admin\Resources\Outlays\Pages\ListOutlays;
use App\Filament\Admin\Resources\Outlays\Schemas\OutlayForm;
use App\Filament\Admin\Resources\Outlays\Tables\OutlaysTable;
use App\Models\Outlay;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class OutlayResource extends Resource
{
    protected static ?string $model = Outlay::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedMinusCircle;

    protected static ?string $recordTitleAttribute = 'Outlay';

    protected static ?string $modelLabel = 'Despesa';

    protected static ?string $pluralModelLabel = 'Despesas';

    protected static ?string $navigationLabel = 'Despesas';

    public static function form(Schema $schema): Schema
    {
        return OutlayForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return OutlaysTable::configure($table);
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
            'index' => ListOutlays::route('/'),
            'create' => CreateOutlay::route('/create'),
            'edit' => EditOutlay::route('/{record}/edit'),
        ];
    }
}
