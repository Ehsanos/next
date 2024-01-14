<?php

namespace App\Filament\Resources\CatalogResource\Pages;

use App\Filament\Resources\CatalogResource;
use App\Models\Catalog;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditCatalog extends EditRecord
{
    protected static string $resource = CatalogResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }


    protected function mutateFormDataBeforeFill(array $data): array
    {

$catalog=Catalog::find($data['id']);

$data['tags']=$catalog->tags()->pluck('name');

return $data;


    }


}
