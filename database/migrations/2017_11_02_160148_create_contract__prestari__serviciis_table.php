<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractPrestariServiciisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contract__prestari__serviciis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Partener');
            $table->string('Obiectul_Contractului');
            $table->string('Suma');
            $table->string('Durata_Contractului');
            $table->text('Obligatiile_Prestatorului');
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
        Schema::dropIfExists('contract__prestari__serviciis');
    }
}
