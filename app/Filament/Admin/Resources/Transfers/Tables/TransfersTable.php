<?php

namespace App\Filament\Admin\Resources\Transfers\Tables;

use Filament\Actions\ActionGroup;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class TransfersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name_current_owner')
                    ->label('PROP. ATUAL')
                    ->searchable(),
                TextColumn::make('name_former_owner')
                    ->label('PROP. ANTIGO')
                    ->searchable(),
                TextColumn::make('plate_vehicle')
                    ->label('PLACA')
                    ->searchable(),
                TextColumn::make('model_vehicle')
                    ->label('MODELO'),
                TextColumn::make('sale_price')
                    ->label('PREÇO')
                    ->money('BRL', locale: 'pt_BR'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ActionGroup::make([
                    EditAction::make(),
                    ViewAction::make(),
                    DeleteAction::make(),
                ]),
            ]);
    }
}
