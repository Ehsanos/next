<?php

namespace App\Filament\Resources\SubscribeResource\Pages;

use App\Filament\Resources\SubscribeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSubscribe extends EditRecord
{
    protected static string $resource = SubscribeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
