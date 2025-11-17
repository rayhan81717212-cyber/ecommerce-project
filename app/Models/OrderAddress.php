<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderAddress extends Model
{
   protected $table = "order_addresses";
   protected  $fillable = [
        'order_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'country',
        'city',
        'address',
   ];

   

}