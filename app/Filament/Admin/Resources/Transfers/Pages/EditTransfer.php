<?php

namespace App\Filament\Admin\Resources\Transfers\Pages;

use App\Filament\Admin\Resources\Transfers\TransferResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditTransfer extends EditRecord
{
    protected static string $resource = TransferResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
