<?php

namespace App\Filament\Resources\CatalogResource\Pages;

use App\Filament\Resources\CatalogResource;
use App\Models\Catalog;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateCatalog extends CreateRecord
{
    protected static string $resource = CatalogResource::class;


    protected function handleRecordCreation(array $data): Model
    {
        $catalog=Catalog::create(collect($data)->except('tags')->toArray());

        foreach ($data['tags'] as $tag) {
            $catalog->tags()->create([
                'name'=>$tag

            ]);
        }

return $catalog;

    }


}
