<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralpostingsetupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generalpostingsetups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('item_posting_group');
            $table->string('merchant_posting_group')->nullable();
            $table->string('COGS_acc')->nullable();
            $table->string('sales_acc')->nullable();
            $table->string('purchases_acc')->nullable();
            $table->string('sales_return_acc')->nullable();
            $table->string('purchases_returns_acc')->nullable();
            $table->string('inventory_adj_accout')->nullalbe();
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
        Schema::dropIfExists('generalpostingsetups');
    }
}
