<?php

namespace App\Filament\Admin\Resources\Outlays\Pages;

use App\Filament\Admin\Resources\Outlays\OutlayResource;
use Filament\Resources\Pages\CreateRecord;

class CreateOutlay extends CreateRecord
{
    protected static string $resource = OutlayResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
