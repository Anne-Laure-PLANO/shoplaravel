<?php




namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function home(){
        return view('accueil');
    }

    public function about(){
        return 'Je suis une superbe description de la boutique !';
    }

    public function up(){
        return '404 no found..';
    }
}
?>