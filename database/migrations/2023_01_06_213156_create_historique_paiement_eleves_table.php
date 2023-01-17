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
        Schema::create('historique_paiement_eleves', function (Blueprint $table) {
            $table->id();
            $table->string('libelle')->nullable();
            $table->string('slug')->nullable();
            $table->foreignId('annee_scolarite_id')->nullable()->constrained('annee_scolarites')->index();
            $table->foreignId('eleve_id')->nullable()->constrained('eleves');
            $table->foreignId('classe_id')->nullable()->constrained('classes');
            $table->foreignId('niveau_id')->nullable()->constrained('niveaux');
            $table->foreignId('paiement_eleve_id')->nullable()->constrained('paiement_eleves');
            $table->double('montant_paye')->unsigned()->nullable();
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
        Schema::dropIfExists('historique_paiement_eleves');
    }
};
