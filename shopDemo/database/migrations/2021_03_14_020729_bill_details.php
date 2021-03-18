<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BillDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('billdetails' , function (Blueprint $table) {
            $table->id();
           
            $table->double('quantity',20,2);
            $table->double('total',20,2);

            // 1 hasn't have payement
            // 2 has already pay
            // 3 has been destroyed
            $table->unsignedTinyInteger('payment_status');	

            // 1 hasn't confirmed
            // 2 has already confirmed
            $table->unsignedTinyInteger('confirm_status');	
            
            $table->unsignedBigInteger('proid');
            $table->foreign('proid')->references('id')->on('product');
            $table->unsignedBigInteger('orderid');
          
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
        Schema::dropIfExists('billdetails');
    }
}
