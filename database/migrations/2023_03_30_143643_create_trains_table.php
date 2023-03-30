<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->increments('id');
            $table->string('azienda', 50);
            $table->string('stazione_partenza', 50);
            $table->string('stazione_arrivo', 50);
            $table->time('orario_partenza');
            $table->time('orario_arrivo');
            $table->string('codice_treno', 20);
            $table->integer('numero_carrozze');
            $table->boolean('in_orario');
            $table->boolean('cancellato');
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
        Schema::create('trains', function (Blueprint $table) {
            $table->dropColumn('azienda');
            $table->dropColumn('stazione_partenza');
            $table->dropColumn('stazione_arrivo');
            $table->dropColumn('orario_partenza');
            $table->dropColumn('orario_arrivo');
            $table->dropColumn('codice_treno');
            $table->dropColumn('numero_carrozze');
            $table->dropColumn('in_orario');
            $table->dropColumn('cancellato');
        });
    }
};
