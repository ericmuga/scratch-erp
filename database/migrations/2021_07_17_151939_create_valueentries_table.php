<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateValueentriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valueentries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('document_no');
            $table->string('item_code');
            $table->string('location_code');
            $table->float('ile_quantity');
            $table->float('valued_quantity');
            $table->string('uom');
            $table->integer('entry_type');
            $table->int('item_ledger_entry_no');
            $table->int('document_type');
            $table->date('posting_date');
            $table->string('external_doc_no')->nullalbe();
            $table->integer('applies_to_entry');
            $table->float('cost_amount');
            $table->float('sales_amount');
            $table->string('merchant_posting_grp')->nullable();
            $table->string('item_posting_group');
            $table->float('cost_per_unit');
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
        Schema::dropIfExists('valueentries');
    }
}
