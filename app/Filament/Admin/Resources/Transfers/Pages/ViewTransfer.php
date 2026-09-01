<?php

namespace App\Filament\Admin\Resources\Transfers\Pages;

use App\Filament\Admin\Resources\Transfers\TransferResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewTransfer extends ViewRecord
{
    protected static string $resource = TransferResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
