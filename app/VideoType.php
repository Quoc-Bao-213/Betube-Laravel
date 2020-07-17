<?php

namespace App;

class VideoType extends Model
{
    public function videos()
    {
        return $this->belongsTo(Video::class);
    }
}
