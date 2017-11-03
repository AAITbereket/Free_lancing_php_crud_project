<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePVConstatareAServiciilorPrestatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_v__constatare_a_serviciilor_prestates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Data');
            $table->string('Partener');
            $table->text('Sericiile_Prestate');
            $table->string('Contract');
            $table->string('Data_Contract');
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
        Schema::dropIfExists('p_v__constatare_a_serviciilor_prestates');
    }
}
