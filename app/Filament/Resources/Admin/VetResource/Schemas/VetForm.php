<?php

namespace App\Filament\Resources\Admin\VetResource\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class VetForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),

                TextInput::make('email')
                    ->email()
                    ->maxLength(255),

                TextInput::make('phone')
                    ->tel()
                    ->maxLength(50),
            ]);
    }
}
