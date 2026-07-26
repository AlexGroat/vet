<?php

namespace App\Filament\Resources\admin\VetResource\Pages;

use App\Filament\Resources\admin\VetResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListVets extends ListRecords
{
    protected static string $resource = VetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
