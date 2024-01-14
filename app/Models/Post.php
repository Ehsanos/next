<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Tags\HasTags;

class Post extends Model implements HasMedia
{
    use InteractsWithMedia,HasTags;
    use HasFactory;
    protected $guarded=[];

    protected $casts = [
        'sections' => 'array',
    ];


    public function section(){
        return $this->belongsToMany(Section::class);
    }
}
