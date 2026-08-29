<?php

namespace App\Filament\Admin\Resources\Vehicles\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class VehicleInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('model_vehicle')->label('MODELO:'),
                TextEntry::make('brand_vehicle')->label('MARCA:'),
                TextEntry::make('plate_vehicle')->label('PLACA:'),
                TextEntry::make('year_vehicle')->label('ANO:'),
                TextEntry::make('chassi_vehicle')->label('CHASSI:'),
                TextEntry::make('crv_vehicle')->label('CRV:'),
                TextEntry::make('renavan_vehicle')->label('RENAVAN:'),
                TextEntry::make('color_vehicle')
                    ->label('COR:')
                    ->placeholder('-'),
                IconEntry::make('status_vehicle')
                    ->label('STATUS:')
                    ->boolean(),
                TextEntry::make('observation_vehicle')
                    ->label('OBSERVAÇÃO:')
                    ->placeholder('-'),
            ]);
    }
}
