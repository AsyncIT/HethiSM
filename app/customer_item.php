<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer_item extends Model
{
    protected $fillable = [
        'customer_id',
        'product_id',
        'product_name',
        'product_price',
        'product_qty',
        'status',
    ];
}
