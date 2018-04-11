<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Activitylog\Traits\LogsActivity;

class User extends Authenticatable
{
    use Notifiable;
    use LogsActivity;

    protected $table = "users";

    protected $primaryKey = "user_id";

    public $incrementing = false;

    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'username', 'first_name', 'last_name', 'email', 'password',
    ];

    protected static $logAttributes = [
        'username', 'email', 'first_name', 'last_name',
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
        return $this->hasMany('App\Invoice', 'user_id');
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
