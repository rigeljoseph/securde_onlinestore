<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $table = "sessions";

    protected $primaryKey = "id";

    protected $keyType = "string";

    protected $incrementing = false;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
