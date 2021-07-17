<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShiptoaddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shiptoaddresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code');
            $table->string('customer_code');
            $table->string('physical_address');
            $table->string('email')->nullable();
            $table->string('phone')->nullable  route()->string()->nullable();
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
        Schema::dropIfExists('shiptoaddresses');
    }
}
