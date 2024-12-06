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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nom du produit
            $table->text('description')->nullable(); // Description du produit
            $table->foreignId('category_id')->constrained()->onDelete('cascade'); // Clé étrangère vers categories
            $table->decimal('base_purchase_price', 10, 2); // Prix d'achat de base
            $table->decimal('base_selling_price', 10, 2); // Prix de revente de base
            $table->integer('stock')->default(0); // Quantité en stock
            $table->enum('rank', ['common', 'rare', 'legendary'])->default('common');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
