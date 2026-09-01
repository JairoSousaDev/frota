<?php

namespace App\Filament\Admin\Resources\Transfers\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class TransferInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name_current_owner')->label('PROP. ATUAL'),
                TextEntry::make('cpf_current_owner')->label('CPF PROP. ATUAL'),
                TextEntry::make('address_current_owner')->label('ENDEREÇO PROP. ATUAL'),
                TextEntry::make('phone_current_owner')->label('TELEFONE PROP ATUAL'),
                TextEntry::make('name_former_owner')->label('PROP. ANTIGO'),
                TextEntry::make('address_former_owner')->label('ENDEREÇO PROP. ANTIGO'),
                TextEntry::make('receipt_date')
                    ->label('DATA DO RECIBO')
                    ->date(),
                TextEntry::make('submission_date')
                    ->label('DATA DESPACHANTE')
                    ->date(),
                TextEntry::make('plate_vehicle')->label('PLACA'),
                TextEntry::make('model_vehicle')->label('MODELO'),
                TextEntry::make('renavan_vehicle')->label('RENAVAN'),
                TextEntry::make('sale_price')
                    ->label('PREÇO VEÍCULO')
                    ->money('BRL', locale: 'pt_BR'),
            ]);
    }
}
