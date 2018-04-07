<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvoiceStatus extends Model
{
    protected $table = "invoice_statuses";

    protected $primaryKey = "invoice_status_id";

    public $timestamps = true;

    public function invoice(){
        return $this->belongsTo('App\Invoice');
    }
}
