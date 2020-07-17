<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;

class Video extends Model
{

    use SoftDeletes;    

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
        return $this->hasMany(Comment::class)->whereNull('comment_id')->orderBy('created_at', 'DESC');
    }

    public function votes()
    {
        return $this->morphMany(Vote::class, 'voteable');
    }
}
