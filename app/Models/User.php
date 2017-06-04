<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'status', 'nickname', 'music', 'about', 'skype', 'phone', 'avatar'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function instruments()
    {
        return $this->belongsToMany('App\Models\Instrument')->withPivot('level');
    }
}
