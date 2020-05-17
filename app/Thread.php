<?php

namespace App;

use CyrildeWit\EloquentViewable\Contracts\Viewable;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Cog\Contracts\Love\Reactable\Models\Reactable as ReactableContract;
use Cog\Laravel\Love\Reactable\Models\Traits\Reactable;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Thread extends Model implements Viewable , ReactableContract
{

    use Reactable;
    use InteractsWithViews;
    public $timestamps = true;
    protected $guarded=[];

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function posted_at()
    {
        return $this->created_at->diffForHumans( Carbon::now() );
    }



}
