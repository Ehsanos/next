<?php

namespace App\Filament\Resources\AdminResource\Pages;

use App\Enums\UserTypeEnum;
use App\Filament\Resources\AdminResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAdmin extends CreateRecord
{
    protected static string $resource = AdminResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {

        $data['type']=UserTypeEnum::Admin->value;
        return $data;
            }
}
