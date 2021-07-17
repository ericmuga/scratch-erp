<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemledgerentriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemledgerentries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('document_no');
            $table->string('item_code');
            $table->string('location_code');
            $table->float('quantity');
            $table->string('uom');
            $table->integer('entry_type');
            $table->int('document_type');
            $table->date('posting_date');
            $table->string('external_doc_no')->nullalbe();
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
        Schema::dropIfExists('itemledgerentries');
    }
}
