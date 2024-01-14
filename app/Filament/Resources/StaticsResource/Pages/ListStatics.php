<?php

namespace App\Filament\Resources\StaticsResource\Pages;

use App\Filament\Resources\StaticsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStatics extends ListRecords
{
    protected static string $resource = StaticsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
