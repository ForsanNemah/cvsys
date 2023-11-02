<?php

namespace App\Filament\Resources\CvOrderResource\Pages;

use App\Filament\Resources\CvOrderResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCvOrder extends EditRecord
{
    protected static string $resource = CvOrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
