<?php

namespace App;

class PlaylistDetail extends Model
{
    public function videos()
    {
        return $this->belongsTo(Video::class, 'video_id');
    }
}
