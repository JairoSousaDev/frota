<?php

namespace App\Filament\Admin\Resources\Outlays\Pages;

use App\Filament\Admin\Resources\Outlays\OutlayResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListOutlays extends ListRecords
{
    protected static string $resource = OutlayResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
