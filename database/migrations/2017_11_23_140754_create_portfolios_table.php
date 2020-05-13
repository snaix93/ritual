<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug')->index();
            $table->string('keywords')->nullable();
            $table->longText('description');
            $table->integer('photo_id')->nullable()->index();
            $table->string('category_id')->nullable()->index();
            $table->integer('only_standard')->nullable();
            $table->string('link')->nullable();
            $table->string('price')->nullable();
            $table->string('price2')->nullable();
            $table->string('price3')->nullable();
            $table->string('discount')->nullable();
            $table->integer('amount')->nullable();
            $table->integer('ranking')->nullable()->default(0);
            $table->integer('available')->nullable()->default(1);
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
        Schema::dropIfExists('portfolios');
    }
}
