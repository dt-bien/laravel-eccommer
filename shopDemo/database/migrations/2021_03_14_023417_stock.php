<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Stock extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('stock' , function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('proid');
            $table->foreign('proid')->references('id')->on('product');

            $table->string('productname');
            $table->double('input',8,2);
            $table->double('output',8,2);
            $table->double('balance',8,2);
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
        Schema::dropIfExists('stock');
    }
}
