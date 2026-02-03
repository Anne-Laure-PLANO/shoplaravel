<?php




namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function home(){
        $products = [
            [
                "nom" => "biscotte",
                "nbProduits" => 20,
                "etat" => true
            ],
            [
                "nom" => "lait",
                "nbProduits" => 10,
                "etat" => true
            ],
            [
                "nom" => "chocolat",
                "nbProduits" => 0,
                "etat" => false
            ]
        ];
        return view('accueil', ['products' => $products]);
    }

    public function about(){
        return view('about');
    }

    public function up(){
        return view('/layouts/app');
    }
    public function contact(){
        return view('contact');
    }
}
?>