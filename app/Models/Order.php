<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
   protected $table = "orders";
   protected  $fillable = [
        "user_id",
        "order_number",
        "amount",
        "status",
        "strpe_id",
   ];

   public function products(){
      return $this->hasMany(OrderItem::class);
   }

}
