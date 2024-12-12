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
        Schema::create('player_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('player_id')->constrained()->onDelete('cascade'); // Référence au joueur
            $table->foreignId('product_id')->constrained()->onDelete('cascade'); // Référence au produit
            $table->integer('stock')->default(0); // Quantité possédée par le joueur
            $table->decimal('purchase_price', 10, 2)->nullable(); // Prix moyen d'achat
            $table->timestamp('unlocked_at')->nullable(); // Date de déblocage du produit
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('player_products');
    }
};
