<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    
    public function run(): void
    {
        DB::table('orders')->insert([
    ['user_id' => 1, 'total' => 149.99, 'status' => 'pending', 'created_at' => now(), 'updated_at' => now()],
    ['user_id' => 2, 'total' => 89.50, 'status' => 'paid', 'created_at' => now(), 'updated_at' => now()],
    ['user_id' => 3, 'total' => 299.99, 'status' => 'shipped', 'created_at' => now(), 'updated_at' => now()],
    ['user_id' => 4, 'total' => 59.99, 'status' => 'delivered', 'created_at' => now(), 'updated_at' => now()],
    ['user_id' => 5, 'total' => 120.00, 'status' => 'cancelled', 'created_at' => now(), 'updated_at' => now()],
    ['user_id' => 6, 'total' => 75.25, 'status' => 'pending', 'created_at' => now(), 'updated_at' => now()],
    ['user_id' => 7, 'total' => 180.40, 'status' => 'paid', 'created_at' => now(), 'updated_at' => now()],
    ['user_id' => 8, 'total' => 249.99, 'status' => 'shipped', 'created_at' => now(), 'updated_at' => now()],
    ['user_id' => 9, 'total' => 99.90, 'status' => 'delivered', 'created_at' => now(), 'updated_at' => now()],
    ['user_id' => 10, 'total' => 150.00, 'status' => 'pending', 'created_at' => now(), 'updated_at' => now()]
]);

    }
}
