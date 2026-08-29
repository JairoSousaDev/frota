<?php

namespace App\Filament\Admin\Resources\Clients\Tables;

use Filament\Actions\ActionGroup;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Notifications\Notification;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ClientsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name_client')
                    ->label('CLIENTE')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('phone_client')
                    ->label('TELEFONE'),

                TextColumn::make('city_client')
                    ->label('CIDADE'),

                TextColumn::make('address_client')
                    ->label('RUA'),
                
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ActionGroup::make([
                    ViewAction::make(),
                    EditAction::make(),
                    DeleteAction::make()
                     ->before(function ($record, DeleteAction $action) {
                        if ($record->sales()->exists()) {

                            Notification::make()
                                ->title('Cliente não pode ser excluído')
                                ->body('Este cliente possui vendas vinculadas. Exclua ou altere as vendas antes de tentar excluir o cliente.')
                                ->warning()
                                ->send();

                            $action->halt();
                        }
                    }),
                ]),
            ]);
    }
}
