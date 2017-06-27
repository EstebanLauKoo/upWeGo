<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adventure extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function picture()
    {
        return $this->hasMany(Picture::class);
    }

    public function phone()
    {
        return $this->hasOne(Summary::class);
    }

}
