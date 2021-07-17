<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinediscountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linediscounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('merchant_type');
            $table->integer('item_type');
            $table->string('merchant_code');
            $table->string discount_perc('item_code')->float();
            $table->float('min_base_qty');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
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
        Schema::dropIfExists('linediscounts');
    }
}
