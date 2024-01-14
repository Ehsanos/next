<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Tags\HasTags;

class Section extends Model implements HasMedia
 {
    use HasFactory ,InteractsWithMedia,HasTags;
    protected $guarded=[];
}
