<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Item extends Model
{

    use LogsActivity;

    protected $fillable = [
        'item_id', 'category_id', 'name', 'description', 'price', 'photo'
    ];

    protected static $logAttributes = [
        'category_id', 'name', 'description', 'price'
    ];

    protected $table = "items";

    protected $primaryKey = "item_id";

    protected $keyType = "string";

    public $incrementing = false;

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
        return $this->belongsTo('App\Category', 'category_id');
    }
}
