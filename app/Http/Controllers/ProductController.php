<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function show($produit){
        return 'Détail du produit n°'. $produit ;
    }
}
