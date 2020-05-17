<?php

namespace App;

use CyrildeWit\EloquentViewable\Contracts\Viewable;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Topic extends Model implements Viewable
{
    use InteractsWithViews;
    protected $guarded=[];

    public function threads()
    {
        return $this->hasMany(Thread::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function posted_at()
    {
        return $this->created_at->diffForHumans(Carbon::now());
    }
}
