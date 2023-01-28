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
        Schema::create('eleves', function (Blueprint $table) {
            $table->id();
            $table->string('matricule')->nullable();
            $table->string('nom');
            $table->string('prenom');
            $table->string('slug')->nullable()->unique();
            $table->string('email')->nullable()->unique();
            $table->string('date_naissance')->nullable();
            $table->string('lieu_naissance')->nullable();
            $table->string('telephone')->nullable()->unique();
            $table->string('nationalite')->nullable(); 
            $table->string('adresse')->nullable();
            $table->string('sexe');
            $table->string('photo')->nullable();

            $table->string('pere')->nullable();
            $table->string('mere')->nullable();
            $table->string('tuteur')->nullable();
            $table->string('telephone_tuteur')->nullable();
            $table->string('adresse_tuteur')->nullable();
            $table->string('email_tuteur')->nullable();
            $table->boolean('status')->default(true);
            $table->foreignId('annee_scolarite_id')->nullable()->constrained('annee_scolarites')->index();
            $table->foreignId('classe_id')->nullable()->constrained('classes');
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
        Schema::dropIfExists('eleves');
    }
};
