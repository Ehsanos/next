<?php

namespace App\Filament\Resources\DelegteResource\Pages;

use App\Enums\UserTypeEnum;
use App\Filament\Resources\DelegteResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDelegte extends CreateRecord
{
    protected static string $resource = DelegteResource::class;


    protected function mutateFormDataBeforeCreate(array $data): array
    {

        $data['type']=UserTypeEnum::Delegte->value;
        return $data;


    }
}
