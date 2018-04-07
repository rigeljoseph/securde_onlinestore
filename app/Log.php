<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $table = "logs";

    protected $primaryKey = "log_id";

    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function log_status(){
        return $this->hasOne('App\LogStatus');
    }
}
