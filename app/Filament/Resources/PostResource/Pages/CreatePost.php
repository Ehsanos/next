<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use App\Models\Post;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;




//    protected function handleRecordCreation(array $data): Model
//    {
//
//$post=Post::create(collect($data)->except('tags')->toArray());
//
//foreach ($data['tags'] as $tag){
//
//    $post->tags()->create([
//        'name'=>$tag
//    ]);
//
//    }
//
//return $post;
//
//    }


}
