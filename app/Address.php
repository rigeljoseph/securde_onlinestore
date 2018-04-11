<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Address extends Model
{
    //
    use LogsActivity;

    protected $table = "addresses";

    protected $primaryKey = "address_id";

    protected $keyType = "string";

    protected $fillable = [
        'address'
    ];

    protected static $logFillable = true;


    public $incrementing = false;

    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }

}
