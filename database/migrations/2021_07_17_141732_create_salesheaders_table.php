<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesheadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salesheaders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no')->unique();
            $table->string('doc_type');
            $table->string('external_doc_no')->nullable();
            $table->string('salesperson');
            $table->string('sell_to_cust');
            $table->string('bill_to_cust');
            $table->date('doc_date');
            $table->date('shipment_date');
            $table->date('posting_date');
            $table->code('series_code');
            $table->string('merchant_vat_grp');
            $table->string('currency');
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
        Schema::dropIfExists('salesheaders');
    }
}
