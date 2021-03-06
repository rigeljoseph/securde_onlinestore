<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";

    protected $primaryKey = "category_id";

    public $timestamps = true;

    public function item(){
        return $this->hasMany('App\Item', 'category_id');
    }
}
