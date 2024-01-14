<?php

namespace App\Filament\Resources\DelegteTResource\Pages;

use App\Filament\Resources\DelegteTResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDelegteT extends EditRecord
{
    protected static string $resource = DelegteTResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
