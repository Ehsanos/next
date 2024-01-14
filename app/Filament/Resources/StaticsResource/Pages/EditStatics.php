<?php

namespace App\Filament\Resources\StaticsResource\Pages;

use App\Filament\Resources\StaticsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStatics extends EditRecord
{
    protected static string $resource = StaticsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
