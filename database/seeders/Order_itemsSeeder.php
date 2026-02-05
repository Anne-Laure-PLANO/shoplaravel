<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Order_itemsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('order_items')->insert([
    ['order_id' => 1, 'product_id' => 1, 'quantity' => 2, 'unit_price' => 19.99, 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 1, 'product_id' => 2, 'quantity' => 1, 'unit_price' => 49.99, 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 2, 'product_id' => 3, 'quantity' => 3, 'unit_price' => 15.50, 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 2, 'product_id' => 4, 'quantity' => 1, 'unit_price' => 99.99, 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 3, 'product_id' => 5, 'quantity' => 2, 'unit_price' => 25.00, 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 3, 'product_id' => 6, 'quantity' => 5, 'unit_price' => 12.75, 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 4, 'product_id' => 7, 'quantity' => 1, 'unit_price' => 59.99, 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 4, 'product_id' => 8, 'quantity' => 4, 'unit_price' => 11.50, 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 5, 'product_id' => 9, 'quantity' => 3, 'unit_price' => 8.99, 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 5, 'product_id' => 10, 'quantity' => 1, 'unit_price' => 20.00, 'created_at' => now(), 'updated_at' => now()]
]);

    }
}
