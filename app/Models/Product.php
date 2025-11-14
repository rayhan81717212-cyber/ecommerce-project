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
        'short_description',
        'description',
        'price',
        'discount_price',
        'stock_quantity',
        'status',
        'photo',
    ];


    public function gallery()
    {
        return $this->hasMany(ProductGallery::class, 'product_id', 'id');
    }
}
