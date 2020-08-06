<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;

class Video extends Model
{
   
    protected $with = ['user'];
    
    public function videoTypes()
    {
        return $this->hasMany(VideoType::class, 'id', 'video_type_id');
    }

    public function playlist()
    {
        return $this->belongsToMany(Playlist::class, 'playlist_details');
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
    
    public function formatView($number)
    {
        if($number>=1000000000000) return round(($number/1000000000000),1).'T';
        else if ($number>=1000000000) return round(($number/1000000000),1).'B';
        else if ($number>=1000000) return round(($number/1000000),1).'M';
        else if ($number>=1000) return round(($number/1000),1).'K';
        return $number;
    }
}
