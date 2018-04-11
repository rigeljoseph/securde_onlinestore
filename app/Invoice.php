<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Invoice extends Model
{

    use LogsActivity;

    protected $fillable = [
        'user_id', 'address_id', 'total_cost', 'fulfilled'
    ];

    protected static $logAttributes = [
        'fulfilled'
    ];

    protected $table = "invoices";

    protected $primaryKey = "invoice_id";

    protected $keyType = "string";

    public $incrementing = false;

    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function invoice_status(){
        return $this->hasOne('App\InvoiceStatus');
    }

    public function orders(){
        return $this->hasMany('App\Order');
    }
}
