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
        Schema::create('emploies', function (Blueprint $table) {
            $table->id();
            $table->string('jour')->nullable();
            $table->string('slug')->nullable();
            $table->string('heure_debut')->nullable();
            $table->string('heure_fin')->nullable();
            $table->string('durer')->nullable();
            $table->foreignId('matiere_id')->nullable()->constrained('matieres');
            $table->foreignId('classe_id')->nullable()->constrained('classes');
            $table->foreignId('prof_id')->nullable()->constrained('profs');
            $table->foreignId('user_id')->nullable()->constrained('users');
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
        Schema::dropIfExists('emploies');
    }
};
