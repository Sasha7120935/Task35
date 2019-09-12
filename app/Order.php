<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function OrderProduct()
    {
        return $this->belongsToMany(\App\Product::class);
    }

}
