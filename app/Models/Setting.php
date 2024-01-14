<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use RalphJSmit\Laravel\SEO\Support\HasSEO;


class Setting extends Model implements HasMedia
{
    protected $guarded=[];

    use HasFactory , InteractsWithMedia;
    use HasSEO;

}
