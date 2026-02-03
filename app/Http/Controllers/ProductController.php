<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
   
    public function show($produit){
        return 'Détail du produit n°'. $produit ;
    }

    public function index(){
        $products = [
            ['id' => 1,'nom' => 'Biscotte','prix' => 2.50],
            ['id' => 2,'nom' => 'Lait','prix' => 1.80],
            ['id' => 3,'nom' => 'Chocolat','prix' => 3.20],
            ['id' => 4,'nom' => 'Pain','prix' => 1.50],
            ['id' => 5,'nom' => 'Fromage','prix' => 4.00]
        ];
        return view('/products/index', compact('products'));
    }
}
