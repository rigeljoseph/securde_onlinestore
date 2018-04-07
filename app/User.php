<?php

namespace App;

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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function user_type(){
        return $this->hasOne('App\UserType');
    }

    public function sessions(){
        return $this->hasMany('App\Session');
    }

    public function invoices(){
        return $this->hasMany('App\Invoice');
    }

    public function logs(){
        return $this->hasMany('App\Log');
    }

    public function addresses(){
        return $this->hasMany('App\Address');
    }

    public function reviews(){
        return $this->hasMany('App\Review');
    }
}
