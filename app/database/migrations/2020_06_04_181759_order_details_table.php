<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('order_details', function (Blueprint $table) {
          $table->id();
          $table->unsignedBigInteger('id_product');
          $table->unsignedBigInteger('id_order');
          $table->double('unit_price', 8, 2);
          $table->integer('quantity');
          $table->timestamps();

          $table->foreign('id_product')->references('id')->on('products');
          $table->foreign('id_order')->references('id')->on('orders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('order_details');
    }
}
