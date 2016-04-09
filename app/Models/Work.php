<?php

namespace App\Models\Work;

use Illuminate\Database\Eloquent\Model;

class Work extends Model {

    public function groups()
    {
        return $this->belongsToMany('Group')->withPivot('order')->withTimestamps();
    }

}

