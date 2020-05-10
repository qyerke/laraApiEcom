<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Transaction;


class Status extends Model
{
    public function transcations()
    {
        return $this->belongsTo(Transaction::class,'id','statuses_id');
    }
}
