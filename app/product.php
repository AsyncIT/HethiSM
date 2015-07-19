<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected  $fillable = [
    'product_name',
    'product_description',
    'price',
    'promo_price',
    'product_category',
    'image1',
     'featured',

];


    public function user()
    {
        return $this->belongsTo(App\User);
    }
}
