<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'Goodies',
                'unlock_cost' => 0, // Débloqué par défaut
                'is_unlocked' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mode',
                'unlock_cost' => 1000, // Coût pour débloquer
                'is_unlocked' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Électroménager',
                'unlock_cost' => 3000,
                'is_unlocked' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Électronique',
                'unlock_cost' => 5000,
                'is_unlocked' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Meubles',
                'unlock_cost' => 8000,
                'is_unlocked' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Voitures',
                'unlock_cost' => 15000,
                'is_unlocked' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}