<?php

namespace App\Filament\Admin\Resources\Outlays\Pages;

use App\Filament\Admin\Resources\Outlays\OutlayResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditOutlay extends EditRecord
{
    protected static string $resource = OutlayResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
    
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
