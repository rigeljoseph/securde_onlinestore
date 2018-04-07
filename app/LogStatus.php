<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogStatus extends Model
{
    protected $table = "log_statuses";

    protected $primaryKey = "log_status_id";

    public $timestamps = true;

    public function log(){
        return $this->belongsTo('App\Log');
    }
}
