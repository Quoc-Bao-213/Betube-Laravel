<?php

namespace App;

class Subscription extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
