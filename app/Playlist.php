<?php

namespace App;

class Playlist extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function videos()
    {
        return $this->belongsToMany(Video::class);
    }
}
