<?php

namespace App\Filament\Resources\DelegteTResource\Pages;

use App\Filament\Resources\DelegteTResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDelegteTS extends ListRecords
{
    protected static string $resource = DelegteTResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
