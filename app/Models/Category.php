<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Tags\HasTags;


class Category extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;
    use HasTags;

    protected $guarded=[];

    protected $casts=[
        'tags'=>'array',
    ];

    public function departments():HasMany
    {
        return $this->hasMany(Department::class);
    }
    public function products():HasManyThrough
    {
        return $this->hasManyThrough(Product::class, Department::class);
    }
}
