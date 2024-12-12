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
        Schema::create('advertisements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('player_id')->constrained()->onDelete('cascade'); // Référence vers le joueur
            $table->string('type'); // Type de publicité : image, vidéo, etc.
            $table->decimal('budget', 15, 2); // Budget investi
            $table->string('target_audience')->nullable(); // Cible de la publicité
            $table->integer('duration')->default(0); // Durée de la campagne en jours
            $table->decimal('effectiveness', 5, 2)->nullable(); // Impact estimé sur les ventes
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('advertisements');
    }
};
