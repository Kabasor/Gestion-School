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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('matricule');
            $table->string('nom');
            $table->string('prenom');
            $table->string('slug')->unique();
            $table->string('email')->unique();
            $table->string('telephone')->nullable()->unique();
            $table->string('fonction');
            $table->string('role');
            $table->string('diplome')->nullable();
            $table->date('date_naissance')->nullable();
            $table->string('lieu_naissance')->nullable();
            $table->mediumText('biographie')->nullable();
            $table->string('adresse')->nullable();
            $table->string('sexe');
            $table->string('photo')->nullable();
            $table->double('salaire')->nullable();
            $table->boolean('active')->default(true)->nullable();
            $table->foreignId('user_id')->nullable()->constrained()->onUpdate('cascade')->index();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->softDeletes();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
