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
        Schema::create('paiement_eleves', function (Blueprint $table) {
            $table->id();
            $table->string('libelle')->nullable();
            $table->string('slug')->nullable();
            $table->foreignId('eleve_id')->nullable()->constrained('eleves');
            $table->foreignId('annee_scolarite_id')->nullable()->constrained('annee_scolarites')->index();
            $table->foreignId('classe_id')->nullable()->constrained('classes');
            $table->foreignId('niveau_id')->nullable()->constrained('niveaux');
            $table->double('remise')->unsigned()->nullable();
            $table->double('dernier_payement')->unsigned()->nullable();
            $table->double('montant_total')->unsigned()->nullable();
            $table->float('pourcentage')->unsigned()->nullable();
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
        Schema::dropIfExists('paiement_eleves');
    }
};
