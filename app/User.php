<?php

namespace App;

use Cog\Contracts\Love\Reacter\Facades\Reacter as ReacterFacade;
use Cog\Contracts\Love\Reacter\Models\Reacter;
use Cog\Contracts\Love\Reacterable\Models\Reacterable as ReacterableContract;
use Cog\Laravel\Love\Reacterable\Models\Traits\Reacterable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable implements MustVerifyEmail, ReacterableContract
{
    use Notifiable;
    use Reacterable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'facebook_id', 'google_id', 'avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function getNameAttribute()
    {
        return $this->username;
    }
    public function setUserNameAttribute($value)
    {
        if (!is_null($this->username)) {
            return null;
        }
        $this->attributes['username'] = Str::slug($value);
    }



}
