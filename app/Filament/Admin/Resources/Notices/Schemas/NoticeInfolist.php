<?php

namespace App\Filament\Admin\Resources\Notices\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class NoticeInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('customer_name')
                    ->label('VENDEDOR'),
                TextEntry::make('seller_name')
                    ->label('COMPRADOR'),
                TextEntry::make('plate_vehicle')
                    ->label('PLACA'),
                TextEntry::make('model_vehicle')
                    ->label('MODELO'),
                TextEntry::make('receipt_date')
                    ->label('DATA DO RECIBO')
                    ->date(),
                TextEntry::make('submission_date')
                    ->date()
                    ->label('DATA DO ENVIO'),
                TextEntry::make('observation')
                    ->label('OBSERVAÇÃO'),
            ]);
    }
}
