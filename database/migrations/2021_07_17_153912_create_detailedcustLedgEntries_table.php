<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailedcustLedgEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailedcustLedgEntries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('document_no');
            $table->string('customer_code');
            $table->string('external_doc_no')->nullable();
            $table->int('document_type');
            $table->date('posting_date');
            $table->string('merchant_posting_grp')->nullable();
            $table->string('sales_person')->nullable();
            $table->integer('cust_ledger_entry');
            $table->float('amount');
            $table->integer('entry_type');
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
        Schema::dropIfExists('detailedcustLedgEntries');
    }
}
