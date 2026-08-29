<?php

namespace App\Filament\Admin\Resources\Sales\Pages;

use App\Filament\Admin\Resources\Sales\SaleResource;
use App\Models\Vehicle;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateSale extends CreateRecord
{
    protected static string $resource = SaleResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if (empty($data['vehicle_id'])) {
            Notification::make()
                ->title('Erro')
                ->body('Veículo não informado.')
                ->danger()
                ->send();

            $this->halt();
        }

        $vehicle = Vehicle::find($data['vehicle_id']);

        if (!$vehicle) {
            Notification::make()
                ->title('Erro')
                ->body('Veículo não encontrado.')
                ->danger()
                ->send();

            $this->halt();
        }

        if (!$vehicle->status_vehicle) {
            Notification::make()
                ->title('Veículo indisponível')
                ->body('Este veículo não está disponível para venda.')
                ->warning()
                ->send();

            $this->halt();
        }

        return $data;
    }

    protected function afterCreate(): void
    {
        $this->record->vehicle->update([
            'status_vehicle' => false,
        ]);
    }
}