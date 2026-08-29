<?php

namespace App\Filament\Admin\Resources\Clients\Tables;

use Filament\Actions\ActionGroup;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ClientsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name_client')
                    ->label('Cliente')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('phone_client')
                    ->label('Telefone'),

                TextColumn::make('city_client')
                    ->label('Cidade'),

                TextColumn::make('address_client')
                    ->label('Rua'),
                
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
            ]);
    }
}
