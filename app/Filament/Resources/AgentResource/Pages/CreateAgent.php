<?php

namespace App\Filament\Resources\AgentResource\Pages;

use App\Enums\UserTypeEnum;
use App\Filament\Resources\AgentResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateAgent extends CreateRecord
{
    protected static string $resource = AgentResource::class;

   protected function mutateFormDataBeforeCreate(array $data): array
   {
      $data['type']=UserTypeEnum::Agent->value;
      return $data;


   }
}
