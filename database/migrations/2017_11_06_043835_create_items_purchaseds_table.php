<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsPurchasedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_purchaseds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Item');
            $table->string('Purchase_id');
            $table->string('Item_descriptioin');
            $table->string('Item_price');
            $table->string('Contractual_clause_item');
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
        Schema::dropIfExists('items_purchaseds');
    }
}
