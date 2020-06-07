<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
  protected $fillable = [
    'id_product', 'unit_price', 'quantity',
  ];
}
