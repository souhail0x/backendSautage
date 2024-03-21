<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('resultat_commande', function (Blueprint $table) {
            $table->foreignId('commande_id')->constrained('commandes')->onDelete('cascade')->onUpdate('cascade');
            $table->string('longeur');
            $table->string('dosage');
            $table->string('largeur');
            $table->string('surface');
            $table->string('volume');
            $table->string('ligneDeTir');
            $table->string('ammonix');
            $table->string('tovex');
            $table->string('aei');
            $table->string('repartition');
            $table->string('chargeInstantane');
            $table->string('rendement');
            $table->string('metrageFore');
            $table->string('detonateur');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resultat_commande');
    }
};
