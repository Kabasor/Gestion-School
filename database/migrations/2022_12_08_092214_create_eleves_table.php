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
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->date('dateNaissance')->nullable();
            $table->string('lieuNaissance')->nullable();
            $table->string('genre')->nullable();
            $table->string('nationalité')->nullable();
            $table->string('pere')->nullable();
            $table->string('mere')->nullable();
            $table->string('tuteur')->nullable();
            $table->integer('phone')->nullable();
            $table->string('adresse')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
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
