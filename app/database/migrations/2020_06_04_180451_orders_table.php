<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('orders', function (Blueprint $table) {
          $table->id();
          $table->string('order_name');
          $table->unsignedBigInteger('user_id');
          $table->unsignedBigInteger('shipping_id');
          $table->double('total', 8, 2);
          $table->string('comments', 255);
          $table->timestamps();

          $table->foreign('user_id')->references('id')->on('users');
          $table->foreign('shipping_id')->references('id')->on('shipping');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('orders');
    }
}
