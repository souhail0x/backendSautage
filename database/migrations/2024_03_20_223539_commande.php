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
        
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->string('id_commande')->unique();
            $table->string('num_command');
            $table->date('date');
            $table->string('panneau');
            $table->string('tranche');
            $table->string('niveau');
            $table->string('mode_tir');
            $table->string('foration');
            $table->integer('nombre_trous');
            $table->integer('nombre_ranges');
            $table->integer('trous_ranges');
            $table->string('maill_banquette');
            $table->string('espacement');
            $table->string('decappage');
            $table->float('profondeur');
            $table->string('zone_tir');
            $table->string('mode_charge');
            $table->string('dosage_prevu');
            $table->string('shema_tir');
            
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};
