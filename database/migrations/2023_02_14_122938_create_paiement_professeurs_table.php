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
        Schema::create('paiement_professeurs', function (Blueprint $table) {
            $table->id();
            $table->string('prix_par_heure')->nullable();
            $table->string('taux_horaire')->nullable();
            $table->string('nombre_dheure')->nullable();
            $table->string('mois')->nullable();
            $table->string('montant')->nullable();
            $table->string('status')->nullable();
            $table->string('slug')->nullable();
            $table->foreignId('prof_id')->nullable()->constrained('profs');
            $table->foreignId('matiere_id')->nullable()->constrained('matieres');
            $table->foreignId('niveau_id')->nullable()->constrained('niveaux');
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
        Schema::dropIfExists('paiement_professeurs');
    }
};
