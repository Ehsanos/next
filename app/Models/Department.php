<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Tags\HasTags;

class Department extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;
    use HasTags;



    protected $casts = [
        'tags' => 'array',
    ];
    protected $guarded=[];
    public function category()
    {

        return $this->belongsTo(Category::class);
    }
    public function getImageAttribute()
    {

        if ($this->hasMedia('departments')) {
            return $this->getFirstMediaUrl('departments');
        }
    }
    public function products(){
        return $this->hasMany(Product::class);
    }




}
