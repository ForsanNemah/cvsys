<?php

namespace App\Filament\Resources\TypeOfEstgdamResource\Pages;

use App\Filament\Resources\TypeOfEstgdamResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTypeOfEstgdams extends ListRecords
{
    protected static string $resource = TypeOfEstgdamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
