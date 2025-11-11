<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductGallery extends Model
{

    protected $table = 'productgalleries';
    protected $fillable = [
        "product_id",
        'photo',
    ];
}
