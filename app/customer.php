<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected  $fillable = [
        'first_name',
        'last_name',
        'telephone',
        'company',
        'Address1',
        'Address2',
        'city',
        'post_code',
        'country',
        'region',

    ];
}
