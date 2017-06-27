<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Summary extends Model
{
    public function adventure()
    {
        return $this->belongsTo(Adventure::class);
    }
}
