<?php

namespace App;

class VideoType extends Model
{
    public function video()
    {
        return $this->belongsTo(Video::class);
    }
}
