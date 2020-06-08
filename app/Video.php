<?php

namespace App;

class Video extends Model
{
    public function videoTypes()
    {
        return $this->hasMany(VideoType::class);
    }

    public function playlist()
    {
        return $this->belongsToMany(Playlist::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
