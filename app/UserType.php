<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    protected $table = "user_types";

    protected $primaryKey = "user_type_id";

    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
