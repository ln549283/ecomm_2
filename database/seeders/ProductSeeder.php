<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            // Catégorie 1 : Goodies
            ['name' => 'Porte-clés simple', 'description' => 'Un porte-clés en plastique.', 'category_id' => 1, 'rank' => 'common', 'base_purchase_price' => 1, 'ideal_selling_price' => 4, 'unlock_price' => 10, 'stock' => 100, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mug personnalisé', 'description' => 'Un mug avec un design unique.', 'category_id' => 1, 'rank' => 'common', 'base_purchase_price' => 3, 'ideal_selling_price' => 9, 'unlock_price' => 20, 'stock' => 100, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'T-shirt promo', 'description' => 'T-shirt léger pour les événements.', 'category_id' => 1, 'rank' => 'common', 'base_purchase_price' => 6, 'ideal_selling_price' => 15, 'unlock_price' => 40, 'stock' => 100, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Porte-clés premium', 'description' => 'Un porte-clés en métal élégant.', 'category_id' => 1, 'rank' => 'rare', 'base_purchase_price' => 12, 'ideal_selling_price' => 30, 'unlock_price' => 80, 'stock' => 50, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mug édition limitée', 'description' => 'Un mug collector.', 'category_id' => 1, 'rank' => 'rare', 'base_purchase_price' => 18, 'ideal_selling_price' => 50, 'unlock_price' => 150, 'stock' => 50, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'T-shirt collector', 'description' => 'T-shirt rare pour collectionneurs.', 'category_id' => 1, 'rank' => 'legendary', 'base_purchase_price' => 30, 'ideal_selling_price' => 100, 'unlock_price' => 750, 'stock' => 10, 'created_at' => now(), 'updated_at' => now()],
        
            // Catégorie 2 : Mode
            ['name' => 'Chaussettes confort', 'description' => 'Chaussettes pour un usage quotidien.', 'category_id' => 2, 'rank' => 'common', 'base_purchase_price' => 5, 'ideal_selling_price' => 12, 'unlock_price' => 200, 'stock' => 100, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'T-shirt classique', 'description' => 'Un T-shirt confortable et stylé.', 'category_id' => 2, 'rank' => 'common', 'base_purchase_price' => 10, 'ideal_selling_price' => 25, 'unlock_price' => 250, 'stock' => 100, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Casquette moderne', 'description' => 'Casquette avec un design contemporain.', 'category_id' => 2, 'rank' => 'common', 'base_purchase_price' => 20, 'ideal_selling_price' => 50, 'unlock_price' => 300, 'stock' => 100, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Montre minimaliste', 'description' => 'Montre élégante au design épuré.', 'category_id' => 2, 'rank' => 'rare', 'base_purchase_price' => 50, 'ideal_selling_price' => 150, 'unlock_price' => 400, 'stock' => 50, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Veste en cuir', 'description' => 'Une veste durable et intemporelle.', 'category_id' => 2, 'rank' => 'rare', 'base_purchase_price' => 120, 'ideal_selling_price' => 350, 'unlock_price' => 600, 'stock' => 50, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sac de créateur', 'description' => 'Un sac élégant conçu par un grand designer.', 'category_id' => 2, 'rank' => 'legendary', 'base_purchase_price' => 250, 'ideal_selling_price' => 800, 'unlock_price' => 3000, 'stock' => 10, 'created_at' => now(), 'updated_at' => now()],
        
            // Catégorie 3 : Électroménager
            ['name' => 'Bouilloire', 'description' => 'Bouilloire rapide et efficace.', 'category_id' => 3, 'rank' => 'common', 'base_purchase_price' => 15, 'ideal_selling_price' => 35, 'unlock_price' => 700, 'stock' => 50, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Grille-pain moderne', 'description' => 'Grille-pain de qualité supérieure.', 'category_id' => 3, 'rank' => 'common', 'base_purchase_price' => 30, 'ideal_selling_price' => 70, 'unlock_price' => 800, 'stock' => 50, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mixeur de cuisine', 'description' => 'Mixeur polyvalent pour tous types de préparations.', 'category_id' => 3, 'rank' => 'common', 'base_purchase_price' => 60, 'ideal_selling_price' => 140, 'unlock_price' => 900, 'stock' => 50, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Barbecue portable', 'description' => 'Barbecue compact pour petits espaces.', 'category_id' => 3, 'rank' => 'rare', 'base_purchase_price' => 150, 'ideal_selling_price' => 400, 'unlock_price' => 1000, 'stock' => 20, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Lave-vaisselle slim', 'description' => 'Idéal pour les petites cuisines.', 'category_id' => 3, 'rank' => 'rare', 'base_purchase_price' => 350, 'ideal_selling_price' => 900, 'unlock_price' => 1500, 'stock' => 20, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Réfrigérateur', 'description' => 'Réfrigérateur haut de gamme.', 'category_id' => 3, 'rank' => 'legendary', 'base_purchase_price' => 800, 'ideal_selling_price' => 2000, 'unlock_price' => 7500, 'stock' => 5, 'created_at' => now(), 'updated_at' => now()],
        
            // Catégorie 4 : High Tech
            ['name' => 'Casque audio', 'description' => 'Casque avec un son immersif.', 'category_id' => 4, 'rank' => 'common', 'base_purchase_price' => 60, 'ideal_selling_price' => 140, 'unlock_price' => 8000, 'stock' => 50, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Montre connectée', 'description' => 'Montre avec suivi de santé.', 'category_id' => 4, 'rank' => 'common', 'base_purchase_price' => 120, 'ideal_selling_price' => 280, 'unlock_price' => 8500, 'stock' => 50, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Smartphone entrée de gamme', 'description' => 'Smartphone basique.', 'category_id' => 4, 'rank' => 'common', 'base_purchase_price' => 250, 'ideal_selling_price' => 600, 'unlock_price' => 9000, 'stock' => 50, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Laptop milieu de gamme', 'description' => 'Ordinateur portable performant.', 'category_id' => 4, 'rank' => 'rare', 'base_purchase_price' => 800, 'ideal_selling_price' => 2000, 'unlock_price' => 10000, 'stock' => 20, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Écran 4K', 'description' => 'Écran haute résolution.', 'category_id' => 4, 'rank' => 'rare', 'base_purchase_price' => 1500, 'ideal_selling_price' => 3800, 'unlock_price' => 15000, 'stock' => 20, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'PC Gaming', 'description' => 'PC hautes performances pour les gamers.', 'category_id' => 4, 'rank' => 'legendary', 'base_purchase_price' => 3000, 'ideal_selling_price' => 15000, 'unlock_price' => 75000, 'stock' => 5, 'created_at' => now(), 'updated_at' => now()],

            // Catégorie 5 : Produits de Luxe
            ['name' => 'Montre classique en or', 'description' => 'Une montre simple mais élégante en or.', 'category_id' => 5, 'rank' => 'common', 'base_purchase_price' => 5000, 'ideal_selling_price' => 12000, 'unlock_price' => 80000, 'stock' => 30, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sac en cuir de marque', 'description' => 'Sac en cuir de qualité supérieure.', 'category_id' => 5, 'rank' => 'common', 'base_purchase_price' => 7000, 'ideal_selling_price' => 15000, 'unlock_price' => 85000, 'stock' => 30, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Pendentif en diamant', 'description' => 'Pendentif élégant orné d’un diamant.', 'category_id' => 5, 'rank' => 'common', 'base_purchase_price' => 10000, 'ideal_selling_price' => 20000, 'unlock_price' => 90000, 'stock' => 20, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Chaussures édition limitée', 'description' => 'Chaussures exclusives produites en série limitée.', 'category_id' => 5, 'rank' => 'rare', 'base_purchase_price' => 20000, 'ideal_selling_price' => 50000, 'unlock_price' => 100000, 'stock' => 10, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Stylo en platine', 'description' => 'Stylo personnalisé en platine.', 'category_id' => 5, 'rank' => 'rare', 'base_purchase_price' => 30000, 'ideal_selling_price' => 80000, 'unlock_price' => 150000, 'stock' => 10, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Collier en diamant', 'description' => 'Collier orné de diamants sertis à la main.', 'category_id' => 5, 'rank' => 'legendary', 'base_purchase_price' => 100000, 'ideal_selling_price' => 500000, 'unlock_price' => 750000, 'stock' => 3, 'created_at' => now(), 'updated_at' => now()],

            // Catégorie 6 : Voitures
            ['name' => 'Voiture compacte économique', 'description' => 'Petite voiture fiable et économique.', 'category_id' => 6, 'rank' => 'common', 'base_purchase_price' => 10000, 'ideal_selling_price' => 18000, 'unlock_price' => 800000, 'stock' => 20, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Voiture familiale standard', 'description' => 'Parfaite pour les familles avec un budget modéré.', 'category_id' => 6, 'rank' => 'common', 'base_purchase_price' => 15000, 'ideal_selling_price' => 25000, 'unlock_price' => 850000, 'stock' => 20, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'SUV polyvalent', 'description' => 'Un SUV pratique et spacieux.', 'category_id' => 6, 'rank' => 'common', 'base_purchase_price' => 30000, 'ideal_selling_price' => 50000, 'unlock_price' => 900000, 'stock' => 15, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Voiture sportive premium', 'description' => 'Une voiture rapide pour les amateurs de sensations fortes.', 'category_id' => 6, 'rank' => 'rare', 'base_purchase_price' => 80000, 'ideal_selling_price' => 200000, 'unlock_price' => 1000000, 'stock' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Berline de luxe', 'description' => 'Une berline élégante avec des finitions haut de gamme.', 'category_id' => 6, 'rank' => 'rare', 'base_purchase_price' => 150000, 'ideal_selling_price' => 350000, 'unlock_price' => 1500000, 'stock' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Voiture de collection vintage', 'description' => 'Un modèle de collection unique.', 'category_id' => 6, 'rank' => 'legendary', 'base_purchase_price' => 500000, 'ideal_selling_price' => 3000000, 'unlock_price' => 7500000, 'stock' => 2, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
