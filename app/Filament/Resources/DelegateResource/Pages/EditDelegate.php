<?php

namespace App\Filament\Resources\DelegateResource\Pages;

use App\Filament\Resources\DelegateResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDelegate extends EditRecord
{
    protected static string $resource = DelegateResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
