<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalelinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salelines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->int('lineno');
            $table->string('doc_no');
            $table->string('doc_type');
            $table->string('item_vat_grp');
            $table->string('item_code');
            $table->string('location_code');
            $table->string('uom');
            $table->float('quantity');
            $table->float('unit_cost');
            $table->float('unit_price');
            $table->float('discount_per');
            $table->float('line_amount');
            $table->float('vat_perc');
            $table->float('amount_incl_vat');
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
        Schema::dropIfExists('salelines');
    }
}
