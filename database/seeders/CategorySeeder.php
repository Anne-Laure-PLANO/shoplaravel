<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name'=>'Electronique',
                'slug' => 'electronique',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Vêtements',
                'slug' => 'vetements',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Maison',
                'slug' => 'maison',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Jouet',
                'slug' => 'jouet',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Sport',
                'slug' => 'sport',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);    
    }
}
