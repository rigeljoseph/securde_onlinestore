<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InventoryStatus extends Model
{
    protected $table = "inventory_statuses";

    protected $primaryKey = "status_id";

    public $timestamps = true;

    public function inventory(){
        return $this->belongsTo('App\Inventory');
    }
}
