<?php

namespace App\Models\GroupWork;

class GroupWork extends Eloquent {

    protected $table = 'group_work';

    public function works()
    {
        return $this->belongsTo('Work');
    }

    public function groups()
    {
        return $this->belongsTo('Group');
    }

}

