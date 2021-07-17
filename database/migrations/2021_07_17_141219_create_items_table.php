<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code');
            $table->string('description')->nullable();
            $table->float('standard_cost')->nullable();
            $table->float('unit_cost')->nullable();
            $table->integer('costing_method');
            $table->string('base_uom');
            $table->string('sales_uom');
            $table->string('purchase_uom');
            $table->string('posting_group')->nullable();
            $table->string('discount_group')->nullable();
            $table->string('vat_group')->nullable();
            $table->boolean('blocked');
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
        Schema::dropIfExists('items');
    }
}
