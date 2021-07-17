<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGLEntryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GLEntry', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('posting_date');
            $table->string('document_no');
            $table->string('gl_account');
            $table->float('amount');
            $table->float('credit_amount');
            $table->float('debit_amount');
            $table->integer('value_entry_no')->nullable();
            $table->integer('cust_ledger_no')->nullable();
            $table->integer('vendor_ledger_no')->nullable();
            $table->string('external_doc_no')->nullable --model=true();
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
        Schema::dropIfExists('GLEntry');
    }
}
