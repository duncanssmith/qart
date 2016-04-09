<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Text extends Model {

    public function groups()
    {
        return $this->belongsToMany('Group')->withPivot('order')->withTimestamps();
    }

}

