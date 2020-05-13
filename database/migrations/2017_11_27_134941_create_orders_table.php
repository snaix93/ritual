<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uuid');
            $table->string('delivery_date')->nullable();
            $table->integer('price')->nullable();
            $table->string('r_name')->nullable();
            $table->string('r_address')->nullable();
            $table->string('coupon')->nullable();
            $table->smallInteger('done')->nullable()->default(0);
            $table->smallInteger('available')->nullable();
            $table->string('r_number')->nullable();
            $table->text('message')->nullable();
            $table->text('description')->nullable();
            $table->string('b_email')->nullable();
            $table->string('b_number')->nullable();
            $table->string('b_address')->nullable();
            $table->string('b_name')->nullable();
            $table->integer('send_photo')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('paid')->nullable();
            $table->integer('payment_type')->nullable();
            $table->integer('order_id')->nullable();
            $table->string('size')->nullable();
            $table->timestamps();
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
