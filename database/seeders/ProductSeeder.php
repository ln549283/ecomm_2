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
            ['name' => 'Porte-clés simple', 'description' => 'Un porte-clés en plastique.', 'category_id' => 1, 'rank' => 'common', 'base_purchase_price' => 1, 'base_selling_price' => 3, 'stock' => 100, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mug personnalisé', 'description' => 'Un mug avec un design personnalisé.', 'category_id' => 1, 'rank' => 'common', 'base_purchase_price' => 2, 'base_selling_price' => 5, 'stock' => 100, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'T-shirt promo', 'description' => 'Un T-shirt pour les événements.', 'category_id' => 1, 'rank' => 'common', 'base_purchase_price' => 3, 'base_selling_price' => 7, 'stock' => 100, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Porte-clés premium', 'description' => 'Porte-clés en métal.', 'category_id' => 1, 'rank' => 'rare', 'base_purchase_price' => 5, 'base_selling_price' => 15, 'stock' => 50, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mug édition limitée', 'description' => 'Un mug collector.', 'category_id' => 1, 'rank' => 'rare', 'base_purchase_price' => 7, 'base_selling_price' => 20, 'stock' => 50, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'T-shirt collector', 'description' => 'Un T-shirt rare pour collectionneurs.', 'category_id' => 1, 'rank' => 'legendary', 'base_purchase_price' => 10, 'base_selling_price' => 50, 'stock' => 10, 'created_at' => now(), 'updated_at' => now()],

            // Catégorie 2 : Mode
            ['name' => 'Chaussettes classiques', 'description' => 'Chaussettes de tous les jours.', 'category_id' => 2, 'rank' => 'common', 'base_purchase_price' => 2, 'base_selling_price' => 5, 'stock' => 100, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'T-shirt basique', 'description' => 'Un T-shirt simple et confortable.', 'category_id' => 2, 'rank' => 'common', 'base_purchase_price' => 4, 'base_selling_price' => 10, 'stock' => 100, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Casquette stylée', 'description' => 'Casquette à la mode.', 'category_id' => 2, 'rank' => 'common', 'base_purchase_price' => 6, 'base_selling_price' => 15, 'stock' => 100, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Montre minimaliste', 'description' => 'Montre au design épuré.', 'category_id' => 2, 'rank' => 'rare', 'base_purchase_price' => 15, 'base_selling_price' => 50, 'stock' => 50, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Veste en cuir', 'description' => 'Veste élégante et durable.', 'category_id' => 2, 'rank' => 'rare', 'base_purchase_price' => 50, 'base_selling_price' => 150, 'stock' => 50, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sac de designer', 'description' => 'Sac exclusif de créateur.', 'category_id' => 2, 'rank' => 'legendary', 'base_purchase_price' => 100, 'base_selling_price' => 500, 'stock' => 10, 'created_at' => now(), 'updated_at' => now()],

            // Catégorie 3 : Électroménager
            ['name' => 'Bouilloire électrique', 'description' => 'Une bouilloire rapide et efficace.', 'category_id' => 3, 'rank' => 'common', 'base_purchase_price' => 10, 'base_selling_price' => 20, 'stock' => 50, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Grille-pain', 'description' => 'Grille-pain performant.', 'category_id' => 3, 'rank' => 'common', 'base_purchase_price' => 15, 'base_selling_price' => 30, 'stock' => 50, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mixeur', 'description' => 'Mixeur pour la cuisine.', 'category_id' => 3, 'rank' => 'common', 'base_purchase_price' => 25, 'base_selling_price' => 50, 'stock' => 50, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Barbecue électrique', 'description' => 'Barbecue performant et compact.', 'category_id' => 3, 'rank' => 'rare', 'base_purchase_price' => 50, 'base_selling_price' => 150, 'stock' => 20, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Lave-vaisselle compact', 'description' => 'Parfait pour une petite cuisine.', 'category_id' => 3, 'rank' => 'rare', 'base_purchase_price' => 100, 'base_selling_price' => 300, 'stock' => 20, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Réfrigérateur haut de gamme', 'description' => 'Frigo moderne et économe.', 'category_id' => 3, 'rank' => 'legendary', 'base_purchase_price' => 200, 'base_selling_price' => 1000, 'stock' => 5, 'created_at' => now(), 'updated_at' => now()],

            // Catégorie 4 : High Tech
            ['name' => 'Casque audio', 'description' => 'Casque avec un son immersif.', 'category_id' => 4, 'rank' => 'common', 'base_purchase_price' => 50, 'base_selling_price' => 100, 'stock' => 50, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Montre connectée', 'description' => 'Montre avec suivi de santé.', 'category_id' => 4, 'rank' => 'common', 'base_purchase_price' => 80, 'base_selling_price' => 150, 'stock' => 50, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Smartphone entrée de gamme', 'description' => 'Smartphone basique.', 'category_id' => 4, 'rank' => 'common', 'base_purchase_price' => 150, 'base_selling_price' => 300, 'stock' => 50, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Laptop milieu de gamme', 'description' => 'Ordinateur portable performant.', 'category_id' => 4, 'rank' => 'rare', 'base_purchase_price' => 500, 'base_selling_price' => 800, 'stock' => 20, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Écran 4K', 'description' => 'Écran haute résolution.', 'category_id' => 4, 'rank' => 'rare', 'base_purchase_price' => 700, 'base_selling_price' => 1200, 'stock' => 20, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'PC Gaming', 'description' => 'PC hautes performances pour les gamers.', 'category_id' => 4, 'rank' => 'legendary', 'base_purchase_price' => 1000, 'base_selling_price' => 3000, 'stock' => 5, 'created_at' => now(), 'updated_at' => now()],
        
            // Categorie 5 : Produit de luxe
            ['name' => 'Montre classique en or', 'description' => 'Une montre simple mais élégante en or.', 'category_id' => 5, 'rank' => 'common', 'base_purchase_price' => 5000, 'base_selling_price' => 9000, 'stock' => 30, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sac en cuir de marque', 'description' => 'Sac en cuir de qualité supérieure.', 'category_id' => 5, 'rank' => 'common', 'base_purchase_price' => 7000, 'base_selling_price' => 12000, 'stock' => 30, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Pendentif en diamant', 'description' => "Pendentif élégant orné d’un diamant.", 'category_id' => 5, 'rank' => 'common', 'base_purchase_price' => 8000, 'base_selling_price' => 15000, 'stock' => 20, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Chaussures édition limitée', 'description' => 'Chaussures exclusives produites en série limitée.', 'category_id' => 5, 'rank' => 'rare', 'base_purchase_price' => 20000, 'base_selling_price' => 40000, 'stock' => 10, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Stylo en platine', 'description' => 'Stylo personnalisé en platine.', 'category_id' => 5, 'rank' => 'rare', 'base_purchase_price' => 25000, 'base_selling_price' => 50000, 'stock' => 10, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Collier en diamant', 'description' => 'Collier orné de diamants sertis à la main.', 'category_id' => 5, 'rank' => 'legendary', 'base_purchase_price' => 100000, 'base_selling_price' => 250000, 'stock' => 3, 'created_at' => now(), 'updated_at' => now()],

            // Catégorie 6 : Voiture
            ['name' => 'Voiture compacte économique', 'description' => 'Petite voiture fiable et économique.', 'category_id' => 6, 'rank' => 'common', 'base_purchase_price' => 10000, 'base_selling_price' => 18000, 'stock' => 20, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Voiture familiale standard', 'description' => 'Parfaite pour les familles avec un budget modéré.', 'category_id' => 6, 'rank' => 'common', 'base_purchase_price' => 15000, 'base_selling_price' => 25000, 'stock' => 20, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'SUV polyvalent', 'description' => 'Un SUV pratique et spacieux.', 'category_id' => 6, 'rank' => 'common', 'base_purchase_price' => 20000, 'base_selling_price' => 35000, 'stock' => 15, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Voiture sportive premium', 'description' => 'Une voiture rapide pour les amateurs de sensations fortes.', 'category_id' => 6, 'rank' => 'rare', 'base_purchase_price' => 50000, 'base_selling_price' => 90000, 'stock' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Berline de luxe', 'description' => 'Une berline élégante avec des finitions haut de gamme.', 'category_id' => 6, 'rank' => 'rare', 'base_purchase_price' => 80000, 'base_selling_price' => 140000, 'stock' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Voiture de collection vintage', 'description' => 'Un modèle de collection unique.', 'category_id' => 6, 'rank' => 'legendary', 'base_purchase_price' => 300000, 'base_selling_price' => 700000, 'stock' => 2, 'created_at' => now(), 'updated_at' => now()],

        ]);
    }
}
