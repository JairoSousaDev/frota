<?php

namespace App\Filament\Admin\Resources\Notices\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class NoticeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(4)
            ->components([
                TextInput::make('customer_name')
                    ->label('COMPRADOR')
                    ->required()
                    ->columnSpan(2),
                TextInput::make('seller_name')
                    ->label('VENDEDOR')
                    ->required()
                    ->columnSpan(2),
                TextInput::make('plate_vehicle')
                    ->label('PLACA')
                    ->required()
                    ->columnSpan(1),
                TextInput::make('model_vehicle')
                    ->label('MODELO')
                    ->required()
                    ->columnSpan(1),
                DatePicker::make('receipt_date')
                    ->label('DATA DO RECIBO')
                    ->required()
                    ->columnSpan(1),
                DatePicker::make('submission_date')
                    ->label('DATA DO ENVIO')
                    ->required()
                    ->columnSpan(1),
                Textarea::make('observation')
                    ->label('OBSERVAÇÃO')
                    ->columnSpan(4),
            ]);
    }
}
