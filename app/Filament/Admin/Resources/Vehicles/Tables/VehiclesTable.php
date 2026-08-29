<?php

namespace App\Filament\Admin\Resources\Vehicles\Tables;

use App\Filament\Admin\Resources\Sales\SaleResource;
use App\Models\Vehicle;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Notifications\Notification;
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
                    ->label('MODELO')
                    ->searchable(),
                TextColumn::make('plate_vehicle')
                    ->label('PLACA')
                    ->searchable(),
                TextColumn::make('chassi_vehicle')
                    ->label('CHASSI')
                    ->searchable(),
                TextColumn::make('color_vehicle')
                    ->label('COR'),
                IconColumn::make('status_vehicle')
                    ->label('STATUS')
                    ->boolean(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                Action::make('sale')
                ->label('Vender')
                ->visible(fn (Vehicle $record): bool => $record->status_vehicle == true)
                ->url(
                    fn (Vehicle $record): string =>
                    SaleResource::getUrl('create', [
                        'vehicle' => $record->getKey()
                    ])
                )
                ->icon('heroicon-o-currency-dollar'),
                ActionGroup::make([
                    ViewAction::make(),
                    EditAction::make(),
                    DeleteAction::make()
                        ->before(function ($record, DeleteAction $action) {
                            if ($record->sales()->exists()) {

                                Notification::make()
                                    ->title('Veículo não pode ser excluído')
                                    ->body('Este veículo possui vendas vinculadas. Exclua ou altere as vendas antes de tentar excluir o veículo.')
                                    ->warning()
                                    ->send();

                                $action->halt();
                            }
                        }),
                ]),
            ]);
    }
}
