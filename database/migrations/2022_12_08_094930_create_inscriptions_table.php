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
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('libelle')->nullable();
            $table->string('slug')->nullable();
            $table->foreignId('eleve_id')->nullable()->constrained('eleves')->index();
            $table->foreignId('annee_scolarite_id')->nullable()->constrained('annee_scolarites')->index();
            $table->double('remise')->unsigned()->nullable();
            $table->double('montant')->unsigned()->nullable();
            $table->double('montant_inscription')->unsigned()->nullable();
            $table->double('montant_paye')->unsigned()->nullable();
            $table->double('reste')->unsigned()->nullable();
            $table->foreignId('user_id')->nullable()->constrained()->onUpdate('cascade');
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
        Schema::dropIfExists('inscriptions');
    }
};
