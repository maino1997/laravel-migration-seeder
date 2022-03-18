<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda', 30);
            $table->string('Stazione_di_partenza', 30);
            $table->string('Stazione_di_arrivo', 30);
            $table->dateTime('Orario_di_partenza', 0);
            $table->dateTime('Orario_di_arrivo', 0);
            $table->smallInteger('Codice_treno');
            $table->tinyInteger('Carrozze');
            $table->boolean('In_orario');
            $table->boolean('Cancellato');
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
        Schema::dropIfExists('trains');
    }
}
