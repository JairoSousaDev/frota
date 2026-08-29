<?php

namespace App\Filament\Admin\Resources\Vehicles\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class VehicleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(4)
            ->components([
                TextInput::make('model_vehicle')
                    ->label('MODELO')
                    ->maxLength(255)
                    ->required(),
                TextInput::make('brand_vehicle')
                    ->label('MARCA')
                    ->maxLength(255)
                    ->required(),
                TextInput::make('plate_vehicle')
                    ->label('PLACA')
                    ->maxLength(255)
                    ->required(),
                TextInput::make('year_vehicle')
                    ->label('ANO')
                    ->maxLength(255)
                    ->required(),
                TextInput::make('chassi_vehicle')
                    ->label('CHASSI')
                    ->maxLength(255)
                    ->required(),
                TextInput::make('crv_vehicle')
                    ->label('CRV')
                    ->maxLength(255)
                    ->required(),
                TextInput::make('renavan_vehicle')
                    ->label('RENAVAN')
                    ->maxLength(255)
                    ->required(),
                TextInput::make('color_vehicle')
                    ->label('COR')
                    ->maxLength(255),
                Toggle::make('status_vehicle')
                    ->label('STATUS')
                    ->disabled()
                    ->default(true)
                    ->columnSpan(1),
                Textarea::make('observation_vehicle')
                    ->label('OBSERVAÇÃO')
                    ->columnSpan(3),
            ]);
    }
}
