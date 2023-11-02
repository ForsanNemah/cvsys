<?php

namespace App\Filament\Resources\TypeOfEstgdamResource\Pages;

use App\Filament\Resources\TypeOfEstgdamResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTypeOfEstgdam extends EditRecord
{
    protected static string $resource = TypeOfEstgdamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
