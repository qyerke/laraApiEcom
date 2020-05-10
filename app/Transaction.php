<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Status;

class Transaction extends Model
{
    public function status() {
        return $this->hasMany(Status::class,'statuses_id','id');
    }
}
