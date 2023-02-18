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
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->string('note_1')->nullable();
            $table->string('note_2')->nullable();
            $table->string('note_3')->nullable(); 
            $table->string('compos')->nullable();
            $table->string('trimestre')->nullable();
            $table->string('semestre')->nullable();
            $table->string('moyenne_generale')->nullable();
            $table->foreignId('annee_scolarite_id')->nullable()->constrained('annee_scolarites')->index();
            $table->string('slug')->nullable();
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->foreignId('eleve_id')->nullable()->constrained('eleves');
            $table->foreignId('matiere_id')->nullable()->constrained('matieres');
            $table->foreignId('classe_id')->nullable()->constrained('classes');
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
        Schema::dropIfExists('notes');
    }
};
