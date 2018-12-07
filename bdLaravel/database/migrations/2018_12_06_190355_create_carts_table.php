<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->unsignedInteger('user-id');
            $table->foreign('user-id')->references('id')->on('users');
            $table->unsignedInteger('product-id');
          
            $table->decimal('discount',6,2);
            $table->decimal('total',6,2);
            $table->boolean('send');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
