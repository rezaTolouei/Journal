<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
