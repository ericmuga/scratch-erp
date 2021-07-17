<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNumberseriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('numberseries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('series_code')->unique();
            $table->string('description')->nullable();
            $table->string('last_no_used');
            $table->string('last_date_used');
            $table->string('starting_no');
            $table->string('ending_no');
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
        Schema::dropIfExists('numberseries');
    }
}
