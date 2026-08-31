<?php

namespace App\Filament\Admin\Resources\Notices\Tables;

use Filament\Actions\ActionGroup;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class NoticesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('customer_name')
                    ->label('COMPRADOR')
                    ->searchable(),
                TextColumn::make('seller_name')
                    ->label('VENDEDOR')
                    ->searchable(),
                TextColumn::make('plate_vehicle')
                    ->label('PLACA')
                    ->searchable(),
                TextColumn::make('model_vehicle')
                    ->label('MODELO'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ActionGroup::make([
                    ViewAction::make(),
                    EditAction::make(),
                    DeleteAction::make(),
                ]),
            ])
        ;
    }
}
