<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/hello',function(){
    return 'Hello Laravel !';
})->name('hello');


Route::get('/about',function(){
    $message = new PageController();
    return $message->about();
})->name('about');

Route::get('/home',[PageController::class,'home'])->name('home');

Route::get('/products/{produit}', [ProductController::class, 'show'])->name('products.show');
?>