<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $table = "invoices";

    protected $primaryKey = "invoice_id";

    protected $keyType = "string";

    protected $incrementing = false;

    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function invoice_status(){
        return $this->hasOne('App\InvoiceStatus');
    }

    public function orders(){
        return $this->hasMany('App\Order');
    }
}
