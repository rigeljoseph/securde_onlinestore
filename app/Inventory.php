<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $table = "inventories";

    protected $primaryKey = "inventory_id";

    public $timestamps = true;

    public function item(){
        return $this->belongsTo('App\Item');
    }

    public function inventory_status(){
        return $this->hasOne('App\InventoryStatus');
    }
}
