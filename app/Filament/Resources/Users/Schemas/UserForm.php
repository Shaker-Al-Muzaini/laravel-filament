<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('email')
                ->label('Email')
                ->required()
                ->maxLength(255),
                TextInput::make('password')
                ->label('Password')
                    ->visibleOn('create')
                ->required()
                    //test
                ->maxLength(255),
                TextInput::make('password_confirmation')
                ->label('Confirm Password')
                    ->visibleOn('create')
                ->required()
                ->maxLength(255),
            ]);
    }
}
