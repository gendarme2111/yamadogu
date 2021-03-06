<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('products')){
        Schema::create('products', function (Blueprint $table) {
            $table->increments("id");
            $table->string('jan')->uniqid();
            $table->string('name');
            $table->string('maker');
            $table->integer('price');
            $table->string('category');
            $table->string('title');
            $table->text('detail');
            $table->string('path');
            $table->timestamps();
        });
        }
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
