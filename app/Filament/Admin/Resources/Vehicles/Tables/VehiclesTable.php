<?php

namespace App\Filament\Admin\Resources\Vehicles\Tables;

use Filament\Actions\ActionGroup;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class VehiclesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('model_vehicle')
                    ->label('MODELO'),
                TextColumn::make('plate_vehicle')
                    ->label('PLACA')
                    ->searchable(),
                TextColumn::make('chassi_vehicle')
                    ->searchable(),
                TextColumn::make('color_vehicle')
                    ->label('COR'),
                IconColumn::make('status_vehicle')
                    ->boolean(),
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
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
