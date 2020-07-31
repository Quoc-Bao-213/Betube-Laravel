<?php

namespace App;

class PlaylistDetail extends Model
{
    protected $with = ['videos'];
    
    public function videos()
    {
        return $this->belongsTo(Video::class, 'video_id');
    }
}
