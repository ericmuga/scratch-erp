<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventorysetupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventorysetups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('posting_group');
            $table->string('inventory_account')->nullable();
            $table->string('inventory_interim_acc')->nullable();
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
        Schema::dropIfExists('inventorysetups');
    }
}
