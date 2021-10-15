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
        Schema::create('suscriptores', function (Blueprint $table) {
            $table->id();
            $table->string('nombreSuscriptor');
            $table->string('nombreRifa');
            $table->date('fechaSuscripcion');
            $table->string('tipoSuscripcion');
            $table->integer('precioDev');
            $table->integer('costoServidor');
            $table->integer('Saldo');
            $table->string('Observaciones');
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
        Schema::dropIfExists('suscriptores');
    }
};
