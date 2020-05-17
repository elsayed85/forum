<?php

namespace App;

use Cog\Contracts\Love\Reactable\Models\Reactable as ReactableContract;
use Cog\Laravel\Love\Reactable\Models\Traits\Reactable;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Comment extends Model  implements ReactableContract
{

    use Reactable;
    protected $guarded=[];

    public function thread()
    {
        return $this->belongsTo(Thread::class);
    }
    public function commented_at()
    {
        return $this->created_at->diffForHumans(Carbon::now());
    }
}
