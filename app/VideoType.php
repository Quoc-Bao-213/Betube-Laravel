<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;

class VideoType extends Model
{
    use SoftDeletes;
    
    public function videos()
    {
        return $this->hasMany(Video::class);
    }
}
