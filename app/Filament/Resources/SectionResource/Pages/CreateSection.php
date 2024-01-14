<?php

namespace App\Filament\Resources\SectionResource\Pages;

use App\Filament\Resources\SectionResource;
use App\Models\Section;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateSection extends CreateRecord
{
    protected static string $resource = SectionResource::class;

    protected function handleRecordCreation(array $data): Model
    {

        foreach ($data['tags'] as $tag) {
            $data->tags()->create([
                'name'=>$tag

            ]);
        }
        return $data;
    }

}
