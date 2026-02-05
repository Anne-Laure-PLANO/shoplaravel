<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
    ['last_name' => 'Dupont', 'first_name' => 'Jean', 'email' => 'jean.dupont@example.com', 'email_verified_at' => now(), 'password' => Hash::make('password123'), 'is_admin' => 0, 'remember_token' => Str::random(60), 'created_at' => now(), 'updated_at' => now()],
    ['last_name' => 'Martin', 'first_name' => 'Alice', 'email' => 'alice.martin@example.com', 'email_verified_at' => now(), 'password' => Hash::make('password123'), 'is_admin' => 1, 'remember_token' => Str::random(60), 'created_at' => now(), 'updated_at' => now()],
    ['last_name' => 'Bernard', 'first_name' => 'Luc', 'email' => 'luc.bernard@example.com', 'email_verified_at' => now(), 'password' => Hash::make('password123'), 'is_admin' => 0, 'remember_token' => Str::random(60), 'created_at' => now(), 'updated_at' => now()],
    ['last_name' => 'Lemoine', 'first_name' => 'Sophie', 'email' => 'sophie.lemoine@example.com', 'email_verified_at' => now(), 'password' => Hash::make('password123'), 'is_admin' => 0, 'remember_token' => Str::random(60), 'created_at' => now(), 'updated_at' => now()],
    ['last_name' => 'Robert', 'first_name' => 'Pierre', 'email' => 'pierre.robert@example.com', 'email_verified_at' => now(), 'password' => Hash::make('password123'), 'is_admin' => 1, 'remember_token' => Str::random(60), 'created_at' => now(), 'updated_at' => now()],
    ['last_name' => 'Thomas', 'first_name' => 'Claire', 'email' => 'claire.thomas@example.com', 'email_verified_at' => now(), 'password' => Hash::make('password123'), 'is_admin' => 0, 'remember_token' => Str::random(60), 'created_at' => now(), 'updated_at' => now()],
    ['last_name' => 'Petit', 'first_name' => 'Marc', 'email' => 'marc.petit@example.com', 'email_verified_at' => now(), 'password' => Hash::make('password123'), 'is_admin' => 0, 'remember_token' => Str::random(60), 'created_at' => now(), 'updated_at' => now()],
    ['last_name' => 'Durand', 'first_name' => 'Caroline', 'email' => 'caroline.durand@example.com', 'email_verified_at' => now(), 'password' => Hash::make('password123'), 'is_admin' => 1, 'remember_token' => Str::random(60), 'created_at' => now(), 'updated_at' => now()],
    ['last_name' => 'Fournier', 'first_name' => 'Sylvain', 'email' => 'sylvain.fournier@example.com', 'email_verified_at' => now(), 'password' => Hash::make('password123'), 'is_admin' => 0, 'remember_token' => Str::random(60), 'created_at' => now(), 'updated_at' => now()],
    ['last_name' => 'Moreau', 'first_name' => 'Sophie', 'email' => 'sophie.moreau@example.com', 'email_verified_at' => now(), 'password' => Hash::make('password123'), 'is_admin' => 0, 'remember_token' => Str::random(60), 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}
