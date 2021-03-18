<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('product' , function (Blueprint $table) {
            $table->id();
            $table->string('productid')->unique();
            $table->string('productname');
            $table->string('tag');
            $table->double('price',20,2);
            $table->double('salesprice',20,2);
            $table->unsignedBigInteger('categoryid');
            $table->foreign('categoryid')->references('id')->on('productcategory');

            $table->unsignedBigInteger('brandid');
            $table->unsignedBigInteger('groupid');
            $table->unsignedBigInteger('detailid')->nullable();
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
        //

        Schema::dropIfExists('product');
    }
}
