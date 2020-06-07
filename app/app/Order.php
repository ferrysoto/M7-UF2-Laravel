<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
      'order_name', 'user_id', 'total', 'comments', 'shipping_id',
    ];
}
