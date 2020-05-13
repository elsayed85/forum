<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded=[];

    public function thread()
    {
        return $this->belongsTo(Thread::class);
    }
}
