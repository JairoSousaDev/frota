<?php

namespace App\Filament\Admin\Resources\Sales\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SalesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('vehicle.model_vehicle')
                    ->label('VEÍCULO')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('client.name_client')
                    ->label('CLIENTE')
                    ->searchable()
                    ->sortable(),
                 TextColumn::make('created_at')
                    ->label('DATA DA VENDA')
                    ->dateTime('d/m/Y H:i'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                //
            ]);
    }
}
