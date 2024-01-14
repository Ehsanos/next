<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Tags\HasTags;


class Catalog extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $guarded=[];

    use HasFactory , HasTags;
}
