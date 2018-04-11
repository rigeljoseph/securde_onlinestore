<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //

    protected $table = "addresses";

    protected $primaryKey = "address_id";

    protected $keyType = "string";

    public $incrementing = false;

    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }

}
