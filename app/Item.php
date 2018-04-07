<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = "items";

    protected $primaryKey = "item_id";

    protected $keyType = "string";

    protected $incrementing = false;

    public $timestamps = true;

    public function reviews(){
        return $this->hasMany('App\Review');
    }

    public function inventories(){
        return $this->hasMany('App\Inventory');
    }

    public function orders(){
        return $this->hasMany('App\Order');
    }

    public function category(){
        return $this->hasOne('App\Category');
    }
}
