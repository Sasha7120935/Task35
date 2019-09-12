<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderStatus extends Model
{
    public function OrderProduct()
    {
        return $this->belongsToMany(\App\Order::class);
    }
}
