<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;


    public function order_details(){
        return $this->hasMany(orderDetails::class,'user_id','id');
    }
    public function user(){
        return $this->belongsTo(order::class,'user_id','id');
    }
}
