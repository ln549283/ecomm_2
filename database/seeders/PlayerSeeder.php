<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('players')->insert([
            [
                'name' => 'loic',
                'balance' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
