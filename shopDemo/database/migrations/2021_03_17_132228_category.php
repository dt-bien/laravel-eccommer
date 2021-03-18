<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Category extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('productdetails' , function (Blueprint $table) {
            $table->id();
            $table->string('productid');
            $table->longText('content1');
            $table->string('photo1')->nullable();
            $table->longText('content2');
            $table->string('photo2')->nullable();
            $table->longText('content3');
            $table->string('photo3')->nullable();
            $table->longText('content4');
            $table->string('photo4')->nullable();
            $table->longText('content5');
            $table->string('photo5')->nullable();
         
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
        Schema::dropIfExists('productdetails');
    }
}
