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
        Schema::create('reinscriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('eleve_id')->nullable()->constrained('eleves');
            $table->foreignId('classe_id')->nullable()->constrained('classes');
            $table->foreignId('annee_scolarite_id')->nullable()->constrained('annee_scolarites')->index();
            // $table->double('remise')->unsigned()->nullable();
            // $table->double('montant')->unsigned()->nullable();
            // $table->double('montant_reinscription')->unsigned()->nullable();
            // $table->double('montant_paye')->unsigned()->nullable();
            // $table->double('reste')->unsigned()->nullable();
            // $table->year('last_reinscription')->nullable()->default(now()->year);
            // $table->boolean('reinscrit')->default(false);
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
        Schema::dropIfExists('reinscriptions');
    }
};
