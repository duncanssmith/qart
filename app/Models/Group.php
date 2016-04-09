<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model {

    public function works()
    {
        return $this->belongsToMany('Work')->withPivot('order')->withTimestamps();
    }

    public function texts()
    {
        return $this->belongsToMany('Text')->withPivot('order')->withTimestamps();
    }

}

