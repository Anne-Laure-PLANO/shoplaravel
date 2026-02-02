<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function home(){
        return redirect()->route('products.show',10);
    }

    public function about(){
        return 'Je suis une superbe description de la boutique !';
    }
}
?>