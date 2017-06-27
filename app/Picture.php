<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    public function adventure()
    {
        return $this->belongsTo(Adventure::class);
    }

    public function comment()
    {
        return $this->hasOne(Comment::class);
    }
}
