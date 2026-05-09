<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
   protected $table = "orders";
   protected  $fillable = [
         'user_id',
         'amount',
         'shipping_fee',
         'grand_total',
         'payment_method',
         'payment_status',
         'status'
   ];

   public function items()
   {
      return $this->hasMany(OrderItem::class);
   }
   

}
