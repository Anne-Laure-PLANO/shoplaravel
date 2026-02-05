<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    
    public function run(): void
    {
        DB::table('products')->insert([
    ['category_id' => 1, 'name' => 'Smartphone X', 'slug' => 'smartphone-x', 'description' => 'Un smartphone de dernière génération', 'image' => 'smartphone-x.jpg', 'price' => 799.99, 'stock' => 50, 'active' => 1, 'created_at' => now(), 'updated_at' => now()],
    ['category_id' => 1, 'name' => 'Laptop Pro', 'slug' => 'laptop-pro', 'description' => 'Un ordinateur portable puissant pour professionnels', 'image' => 'laptop-pro.jpg', 'price' => 1299.99, 'stock' => 30, 'active' => 1, 'created_at' => now(), 'updated_at' => now()],
    ['category_id' => 2, 'name' => 'T-shirt en coton', 'slug' => 't-shirt-en-coton', 'description' => 'Un t-shirt en coton doux pour l\'été', 'image' => 't-shirt-en-coton.jpg', 'price' => 19.99, 'stock' => 200, 'active' => 1, 'created_at' => now(), 'updated_at' => now()],
    ['category_id' => 2, 'name' => 'Jeans Slim', 'slug' => 'jeans-slim', 'description' => 'Un jeans slim confortable', 'image' => 'jeans-slim.jpg', 'price' => 49.99, 'stock' => 150, 'active' => 1, 'created_at' => now(), 'updated_at' => now()],
    ['category_id' => 3, 'name' => 'Lampe LED', 'slug' => 'lampe-led', 'description' => 'Lampe LED pour la maison', 'image' => 'lampe-led.jpg', 'price' => 29.99, 'stock' => 100, 'active' => 1, 'created_at' => now(), 'updated_at' => now()],
    ['category_id' => 3, 'name' => 'Coffre-fort numérique', 'slug' => 'coffre-fort-numerique', 'description' => 'Coffre-fort pour protéger vos objets de valeur', 'image' => 'coffre-fort-numerique.jpg', 'price' => 199.99, 'stock' => 20, 'active' => 1, 'created_at' => now(), 'updated_at' => now()],
    ['category_id' => 1, 'name' => 'Smartwatch S1', 'slug' => 'smartwatch-s1', 'description' => 'Montre intelligente pour une vie plus connectée', 'image' => 'smartwatch-s1.jpg', 'price' => 199.99, 'stock' => 80, 'active' => 1, 'created_at' => now(), 'updated_at' => now()],
    ['category_id' => 2, 'name' => 'Manteau hiver', 'slug' => 'manteau-hiver', 'description' => 'Un manteau chaud pour l\'hiver', 'image' => 'manteau-hiver.jpg', 'price' => 89.99, 'stock' => 120, 'active' => 1, 'created_at' => now(), 'updated_at' => now()],
    ['category_id' => 1, 'name' => 'Tablette 10" X', 'slug' => 'tablette-10-x', 'description' => 'Tablette avec écran 10" haute résolution', 'image' => 'tablette-10-x.jpg', 'price' => 299.99, 'stock' => 60, 'active' => 1, 'created_at' => now(), 'updated_at' => now()],
    ['category_id' => 3, 'name' => 'Chaise ergonomique', 'slug' => 'chaise-ergonomique', 'description' => 'Chaise ergonomique pour une posture parfaite', 'image' => 'chaise-ergonomique.jpg', 'price' => 159.99, 'stock' => 40, 'active' => 1, 'created_at' => now(), 'updated_at' => now()],
    ['category_id' => 1, 'name' => 'Casque audio sans fil', 'slug' => 'casque-audio-sans-fil', 'description' => 'Casque sans fil avec réduction de bruit', 'image' => 'casque-audio-sans-fil.jpg', 'price' => 149.99, 'stock' => 70, 'active' => 1, 'created_at' => now(), 'updated_at' => now()],
    ['category_id' => 2, 'name' => 'Veste en cuir', 'slug' => 'veste-en-cuir', 'description' => 'Veste en cuir pour un look rock', 'image' => 'veste-en-cuir.jpg', 'price' => 129.99, 'stock' => 50, 'active' => 1, 'created_at' => now(), 'updated_at' => now()],
    ['category_id' => 3, 'name' => 'Canapé 3 places', 'slug' => 'canape-3-places', 'description' => 'Canapé confortable pour 3 personnes', 'image' => 'canape-3-places.jpg', 'price' => 499.99, 'stock' => 10, 'active' => 1, 'created_at' => now(), 'updated_at' => now()],
    ['category_id' => 1, 'name' => 'Télévision 4K', 'slug' => 'television-4k', 'description' => 'Télévision 4K avec écran ultra HD', 'image' => 'television-4k.jpg', 'price' => 899.99, 'stock' => 40, 'active' => 1, 'created_at' => now(), 'updated_at' => now()],
    ['category_id' => 3, 'name' => 'Réfrigérateur', 'slug' => 'refrigerateur', 'description' => 'Réfrigérateur avec congélateur intégré', 'image' => 'refrigerateur.jpg', 'price' => 499.99, 'stock' => 25, 'active' => 1, 'created_at' => now(), 'updated_at' => now()],
    ['category_id' => 2, 'name' => 'Robe de soirée', 'slug' => 'robe-de-soiree', 'description' => 'Robe élégante pour des occasions spéciales', 'image' => 'robe-de-soiree.jpg', 'price' => 119.99, 'stock' => 60, 'active' => 1, 'created_at' => now(), 'updated_at' => now()],
    ['category_id' => 1, 'name' => 'Enceinte Bluetooth', 'slug' => 'enceinte-bluetooth', 'description' => 'Enceinte sans fil avec son de qualité', 'image' => 'enceinte-bluetooth.jpg', 'price' => 79.99, 'stock' => 150, 'active' => 1, 'created_at' => now(), 'updated_at' => now()],
    ['category_id' => 3, 'name' => 'Aspirateur robot', 'slug' => 'aspirateur-robot', 'description' => 'Aspirateur robot intelligent', 'image' => 'aspirateur-robot.jpg', 'price' => 249.99, 'stock' => 20, 'active' => 1, 'created_at' => now(), 'updated_at' => now()],
    ['category_id' => 1, 'name' => 'Moniteur LED', 'slug' => 'moniteur-led', 'description' => 'Écran LED 24 pouces', 'image' => 'moniteur-led.jpg', 'price' => 179.99, 'stock' => 80, 'active' => 1, 'created_at' => now(), 'updated_at' => now()],
    ['category_id' => 2, 'name' => 'Chapeau d\'été', 'slug' => 'chapeau-d-ete', 'description' => 'Chapeau léger pour l\'été', 'image' => 'chapeau-d-ete.jpg', 'price' => 15.99, 'stock' => 200, 'active' => 1, 'created_at' => now(), 'updated_at' => now()],
    ['category_id' => 3, 'name' => 'Barbecue électrique', 'slug' => 'barbecue-electrique', 'description' => 'Barbecue électrique avec surface de cuisson ample', 'image' => 'barbecue-electrique.jpg', 'price' => 129.99, 'stock' => 35, 'active' => 1, 'created_at' => now(), 'updated_at' => now()],
    ['category_id' => 1, 'name' => 'Imprimante Laser', 'slug' => 'imprimante-laser', 'description' => 'Imprimante laser monochrome', 'image' => 'imprimante-laser.jpg', 'price' => 109.99, 'stock' => 60, 'active' => 1, 'created_at' => now(), 'updated_at' => now()],
    ['category_id' => 2, 'name' => 'Short de sport', 'slug' => 'short-de-sport', 'description' => 'Short léger et confortable pour le sport', 'image' => 'short-de-sport.jpg', 'price' => 24.99, 'stock' => 90, 'active' => 1, 'created_at' => now(), 'updated_at' => now()],
    ['category_id' => 1, 'name' => 'Chargeur sans fil', 'slug' => 'chargeur-sans-fil', 'description' => 'Chargeur sans fil pour smartphones', 'image' => 'chargeur-sans-fil.jpg', 'price' => 29.99, 'stock' => 110, 'active' => 1, 'created_at' => now(), 'updated_at' => now()],
    ['category_id' => 3, 'name' => 'Machine à café', 'slug' => 'machine-a-cafe', 'description' => 'Machine à café avec broyeur intégré', 'image' => 'machine-a-cafe.jpg', 'price' => 249.99, 'stock' => 30, 'active' => 1, 'created_at' => now(), 'updated_at' => now()],
    ['category_id' => 1, 'name' => 'Disque dur externe', 'slug' => 'disque-dur-externe', 'description' => 'Disque dur externe 1 To', 'image' => 'disque-dur-externe.jpg', 'price' => 59.99, 'stock' => 150, 'active' => 1, 'created_at' => now(), 'updated_at' => now()]
]);

    }
}
