<?php

namespace App\Filament\Resources\admin;

use App\Filament\Resources\admin\VetResource\Pages;
use App\Filament\Resources\Admin\VetResource\Schemas\VetForm;
use App\Filament\Resources\Admin\VetResource\Tables\VetTable;
use App\Models\Vet;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class VetResource extends Resource
{
    protected static ?string $model = Vet::class;

    protected static ?string $slug = 'admin/vets';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return VetForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return VetTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListVets::route('/'),
            'create' => Pages\CreateVet::route('/create'),
            'edit' => Pages\EditVet::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return [];
    }
}
