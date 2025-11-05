<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $table = "products";

   protected $fillable = [
        'name',
        'category_id',
        'brand_id',
        'description',
        'price',
        'discount_price',
        'stock_quantity',
        'status',
        'photo',
    ];
}
