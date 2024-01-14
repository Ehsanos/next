<?php

namespace App\Filament\Resources\ThemesResource\Pages;

use App\Filament\Resources\ThemesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListThemes extends ListRecords
{
    protected static string $resource = ThemesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
