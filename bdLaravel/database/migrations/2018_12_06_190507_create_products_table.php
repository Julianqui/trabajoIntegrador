<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('productName');
            $table->unsignedInteger('category-id');
            $table->foreign('category-id')->references('id')->on('categories');
            $table->unsignedInteger('carts-id');
            $table->foreign('carts-id')->references('id')->on('carts');
            $table->bigInteger('price');
            $table->string('model');
            $table->string('brand');
            $table->biginteger('stock');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
