<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailedvendLedgEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailedvendLedgEntries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('document_no');
            $table->string('vendor_code');
            $table->string('external_doc_no')->nullable();
            $table->int('document_type');
            $table->date('posting_date');
            $table->string('merchant_posting_grp')->nullable();
            $table->string('sales_person')->nullable();
            $table->integer('vendor_ledger_entry');
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
        Schema::dropIfExists('detailedvendLedgEntries');
    }
}
