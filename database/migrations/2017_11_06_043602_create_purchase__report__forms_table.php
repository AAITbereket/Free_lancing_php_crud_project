<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseReportFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase__report__forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Purchase_unique_id');
            $table->text('Justificarea_achizitiei');
            $table->string('Data');
            $table->string('Amount');
            $table->text('Description');
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
        Schema::dropIfExists('purchase__report__forms');
    }
}
