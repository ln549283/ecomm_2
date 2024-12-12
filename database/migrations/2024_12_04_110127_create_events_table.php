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
        Schema::create('events', function (Blueprint $table) {            
            $table->id(); // ID unique de l'événement
            $table->string('name'); // Nom de l'événement
            $table->text('description')->nullable(); // Description de l'événement
            $table->enum('effect_type', ['price_increase', 'price_decrease', 'stock_change']); // Type d'impact
            $table->enum('target_type', ['category', 'product', 'global']); // Type de cible
            $table->unsignedBigInteger('target_id')->nullable(); // ID de la cible (produit ou catégorie)
            $table->decimal('value', 10, 2)->nullable(); // Valeur de l'effet (ex. 10% ou -10%)
            $table->timestamp('start_date')->nullable(); // Début de l'événement
            $table->timestamp('end_date')->nullable(); // Fin de l'événement
            $table->timestamps(); // Champs created_at et updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
