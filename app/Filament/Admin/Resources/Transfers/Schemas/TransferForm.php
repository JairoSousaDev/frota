<?php

namespace App\Filament\Admin\Resources\Transfers\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TransferForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(4)
            ->components([
                TextInput::make('name_current_owner')
                    ->label('NOME PROPRIETÁRIO ATUAL')
                    ->columnSpan(2)
                    ->required(),
                TextInput::make('cpf_current_owner')
                    ->label('CPF PROPRIETÁRIO ATUAL')
                    ->columnSpan(1)
                    ->required(),
                TextInput::make('phone_current_owner')
                    ->label('TELEFONE PROPRIETÁRIO ATUAL')
                    ->columnSpan(1)
                    ->tel()
                    ->required(),
                TextInput::make('address_current_owner')
                    ->label('ENDEREÇO DO PROPRIETÁRIO ATUAL')
                    ->columnSpan(4)
                    ->required(),
                TextInput::make('name_former_owner')
                    ->label('NOME PROPRIETÁRIO ANTIGO')
                    ->columnSpan(2)
                    ->required(),
                DatePicker::make('receipt_date')
                    ->label('DATA DO RECIBO')
                    ->columnSpan(1)
                    ->required(),
                DatePicker::make('submission_date')
                    ->label('DATA DO DESPACHANTE')
                    ->columnSpan(1)
                    ->required(),
                TextInput::make('plate_vehicle')
                    ->label('PLACA DO VEÍCULO')
                    ->columnSpan(1)
                    ->required(),
                TextInput::make('model_vehicle')
                    ->label('MODELO DO VEÍCULO')
                    ->columnSpan(1)
                    ->required(),
                TextInput::make('renavan_vehicle')
                    ->label('RENAVAN DO VEÍCULO')
                    ->columnSpan(1)
                    ->required(),
                TextInput::make('sale_price')
                    ->label('PREÇO DO VEÍCULO')
                    ->columnSpan(1)
                    ->required()
                    ->numeric()
                    ->prefix('$'),
                TextInput::make('address_former_owner')
                    ->label('ENDEREÇO DO PROPRIETÁRIO ANTIGO')
                    ->columnSpan(4)
                    ->required(),
            ]);
    }
}
