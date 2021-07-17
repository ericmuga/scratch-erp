<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinepricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lineprices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('merchant_type');
            $table->integer('item_type');
            $table->string('merchant_code');
            $table->string discount_perc('item_code')->float();
            $table->float('min_base_qty');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->float('price');
            $table->string('currency')->nullable();
            $table->string('ship_to_code')->nullable();
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
        Schema::dropIfExists('lineprices');
    }
}
