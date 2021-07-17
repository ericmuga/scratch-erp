<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseinvheadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchaseinvheaders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no')->unique();
            $table->string('doc_type');
            $table->string('external_doc_no')->nullable();
            $table->string('salesperson');
            $table->string('buy_from_vendor');
            $table->string('pay_to_vendor');
            $table->date('doc_date');
            $table->date('receipt_date');
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
        Schema::dropIfExists('purchaseinvheaders');
    }
}
