<?php

namespace App\Filament\Resources\DelegteResource\Pages;

use App\Filament\Resources\DelegteResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDelegte extends EditRecord
{
    protected static string $resource = DelegteResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
