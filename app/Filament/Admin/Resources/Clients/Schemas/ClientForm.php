<?php

namespace App\Filament\Admin\Resources\Clients\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;

class ClientForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(4)
            ->components([
                TextInput::make('name_client')
                    ->label('NOME')
                    ->required()
                    ->maxLength(255)
                    ->columnSpan(2),
                
                    TextInput::make('email_client')
                    ->label('E-MAIL')
                    ->required()
                    ->maxLength(255)
                    ->columnSpan(2),

                TextInput::make('cpf_client')
                    ->label('CPF')
                    ->required()
                    ->maxLength(18)
                    ->columnSpan(1),

                TextInput::make('rg_client')
                    ->label('RG')
                    ->required()
                    ->maxLength(255)
                    ->columnSpan(1),

                TextInput::make('phone_client')
                    ->label('TELEFONE')
                    ->maxLength(255)
                    ->columnSpan(1),
                
                TextInput::make('state_client')
                    ->label('ESTADO')
                    ->maxLength(255),
                
                TextInput::make('city_client')
                    ->label('CIDADE')
                    ->maxLength(255),

                TextInput::make('district_client')
                    ->label('BAIRRO')
                    ->maxLength(255),

                TextInput::make('address_client')
                    ->label('LOGRADOURO')
                    ->maxLength(255),

                TextInput::make('number_client')
                    ->label('NÚMERO')
                    ->maxLength(255),

                Textarea::make('observation_client')
                    ->label('OBSERVAÇÃO')
                    ->maxLength(255)
                    ->columnSpan(4),
            ]);
    }
}
