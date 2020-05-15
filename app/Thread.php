<?php

namespace App;

use CyrildeWit\EloquentViewable\Contracts\Viewable;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Thread extends Model implements Viewable
{

    use InteractsWithViews;

    protected $guarded=[];

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
