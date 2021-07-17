<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGLAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GLAccount', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('acc_no')->unique();
            $table->string('description')->nullable();
            $table->boolean('allow_direct_posting');
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
        Schema::dropIfExists('GLAccount');
    }
}
