<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;

Route::get('/',[PageController::class,'home'])->name('welcome');


Route::get('/hello',function(){
    return 'Hello Laravel !';
})->name('hello');

#Informations générales :
Route::get('/about',[PageController::class, 'about'])
    ->name('about');

Route::get('/home',[PageController::class,'home'])
    ->name('home');

Route::get('/contact', [PageController::class, 'contact'])
    ->name('contact');

#Profil Administrateur :
#affichage général
Route::get('/admin', [AdminController::class, 'dashboard'])
    ->name('admin.dashboard');


#affichage produit sélectionné :
Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class);

# pour CartController :
Route::get('/cart', [CartController::class, 'displayCart'])->name('cart.display');
Route::post('/cart/add/{product}', [CartController::class, 'addItem'])->name('cart.addItem');
Route::put('/cart/increase/{product}', [CartController::class, 'increaseQuantity'])->name('cart.increaseQuantity');
Route::put('/cart/decrease/{product}', [CartController::class, 'decreaseQuantity'])->name('cart.decreaseQuantity');
Route::delete('/cart/deleteItem/{product}', [CartController::class, 'removeItem'])->name('cart.removeItem');
Route::delete('/cart/clearCart', [CartController::class, 'clearCart'])->name('cart.clearCart');






?>
