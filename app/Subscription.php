<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;

class Subscription extends Model
{
    

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_subscribe');
    }
}
