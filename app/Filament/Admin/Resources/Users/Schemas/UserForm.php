<?php

namespace App\Filament\Admin\Resources\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('NOME')
                    ->required(),
                TextInput::make('email')
                    ->label('E-MAIL')
                    ->email()
                    ->required(),
                TextInput::make('user_name')
                    ->label('USUÁRIO')
                    ->required(),
                TextInput::make('password')
                    ->password()
                    ->required(),
                Toggle::make('status_user')
                    ->label('STATUS')
                    ->default(true)
                    ->required(),
            ]);
    }
}
