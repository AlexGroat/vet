<?php

namespace App\Filament\Resources\admin\VetResource\Pages;

use App\Filament\Resources\admin\VetResource;
use Filament\Resources\Pages\CreateRecord;

class CreateVet extends CreateRecord
{
    protected static string $resource = VetResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
