<?php

namespace App\Filament\Admin\Resources\Sales\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SaleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
        ->columns(4)
            ->components([
                Select::make('vehicle_id')
                    ->label('VEÍCULO')
                    ->relationship('vehicle', 'model_vehicle')
                    ->getOptionLabelFromRecordUsing(
                        fn ($record) =>
                        "{$record->model_vehicle} -
                        Chassi: {$record->chassi_vehicle}")
                    ->default(fn () => request()->query('vehicle'))
                    ->disabled()
                    ->dehydrated()
                    ->required()
                    ->columnSpan(2),
                Select::make('client_id')
                    ->label('CLIENTE')
                    ->relationship('client', 'name_client')
                    ->searchable()
                    ->preload()
                    ->required()
                    ->columnSpan(2),
                TextInput::make('sale_price')
                    ->label('VALOR DA VENDA')
                    ->numeric()
                    ->prefix('R$')
                    ->required()
                    ->columnSpan(2),
                DatePicker::make('date_sale')
                    ->label('DATA DA VENDA')
                    ->columnSpan(2)
                    ->required(),
                Textarea::make('observation')
                    ->label('OBSERVAÇÃO')
                    ->columnSpan(4),
            ]);
    }
}
