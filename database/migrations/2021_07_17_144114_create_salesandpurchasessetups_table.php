<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesandpurchasessetupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salesandpurchasessetups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->int('lineno');
            $table->string('purchase_quote_nos')->nullable();
            $table->string('purchase_order_nos')->nullable();
            $table->string('purchase_invoice_nos')->nullable();
            $table->string('purchase_receipt_nos')->nullable();
            $table->string('sales_qoute_nos')->nullable();
            $table->string('sales_order_nos')->nullable();
            $table->string('sales_invoice_nos')->nullable();
            $table->string('sales_shipment_nos')->nullable();
            $table->string('item_nos')->nullable();
            $table->string('vendor_nos')->nullaable();
            $table->string('customer_nos')->nullable();
            $table->boolean('autoassign_customer_nos');
            $table->boolean('autoassign_item_nos');
            $table->boolean('autoassign_vendor_nos');
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
        Schema::dropIfExists('salesandpurchasessetups');
    }
}
