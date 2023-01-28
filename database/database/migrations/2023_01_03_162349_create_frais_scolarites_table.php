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
        Schema::create('frais_scolarites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('session_id')->nullable()->constrained();
            $table->foreignId('niveau_id')->nullable()->constrained('niveaux');
            $table->foreignId('classe_id')->nullable('classes')->constrained();

            $table->double('inscription')->unsigned()->nullable();
            $table->double('reinscription')->unsigned()->nullable();
            $table->double('scolarite')->unsigned()->nullable();
            $table->double('remise')->unsigned()->nullable();

            $table->double('premiere_tranche_scolarite_inscription')->unsigned()->nullable();
            $table->double('deuxieme_tranch_scolarite_inscription')->unsigned()->nullable();
            $table->double('troisieme_tranch_scolarite_inscription')->unsigned()->nullable();

            $table->double('premiere_tranche_scolarite_reinscription')->unsigned()->nullable();
            $table->double('deuxieme_tranch_scolarite_reinscription')->unsigned()->nullable();
            $table->double('troisieme_tranch_scolarite_reinscription')->unsigned()->nullable();

            $table->double('total_inscription_scolarite')->unsigned()->nullable();
            $table->double('total_reinscription_scolarite')->unsigned()->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('frais_scolarites');
    }
};
