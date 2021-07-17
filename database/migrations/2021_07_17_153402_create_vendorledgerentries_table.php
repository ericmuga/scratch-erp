<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorledgerentriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendorledgerentries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('document_no');
            $table->string('vendor_code');
            $table->string('external_doc_no')->nullable();
            $table->int('document_type');
            $table->date('posting_date');
            $table->string('merchant_posting_grp')->nullable();
            $table->string('sales_person')->nullable();
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
        Schema::dropIfExists('vendorledgerentries');
    }
}
