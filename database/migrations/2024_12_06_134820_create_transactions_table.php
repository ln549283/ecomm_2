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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('player_id')->constrained()->onDelete('cascade'); // Référence vers le joueur
            $table->foreignId('product_id')->constrained()->onDelete('cascade'); // Référence vers le produit
            $table->enum('type', ['purchase', 'sale']); // Type de transaction : achat ou vente
            $table->integer('quantity'); // Quantité achetée/vendue
            $table->decimal('unit_price', 10, 2); // Prix unitaire
            $table->decimal('total_price', 15, 2); // Prix total
            $table->timestamp('transaction_date')->nullable(); // Date de la transaction
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
