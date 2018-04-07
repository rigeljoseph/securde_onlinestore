<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";

    protected $primaryKey = "order_id";

    public $timestamps = true;

    public function invoice(){
        return $this->belongsTo('App\Invoice');
    }

    public function item(){
        return $this->belongsTo('App\Item');
    }
}
