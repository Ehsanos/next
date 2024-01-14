<?php

namespace App\Filament\Resources\CategoryResource\Pages;

use App\Filament\Resources\CategoryResource;
use App\Models\Category;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateCategory extends CreateRecord
{
    protected static string $resource = CategoryResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $category = Category::create(collect($data)->except('tags')->toArray());
        foreach ($data['tags'] as $tag) {
            $category->tags()->create([
                'name'=>$tag

            ]);
        }
        return $category;
    }
}
