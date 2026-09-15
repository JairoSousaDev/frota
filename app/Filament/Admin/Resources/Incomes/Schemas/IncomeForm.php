<?php

namespace App\Filament\Admin\Resources\Incomes\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class IncomeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(4)
            ->components([
                TextInput::make('value')
                    ->label('VALOR')
                    ->required()
                    ->columnSpan(1)
                    ->numeric(),
                DatePicker::make('date_incomes')
                    ->label('DATA')
                    ->columnSpan(1)
                    ->required(),
                Textarea::make('description')
                    ->label('DESCRIÇÃO')
                    ->columnSpan(2)
                    ->required(),
            ]);
    }
}
