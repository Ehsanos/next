<?php

namespace App\Filament\Resources\ThemesResource\Pages;

use App\Filament\Resources\ThemesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditThemes extends EditRecord
{
    protected static string $resource = ThemesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
