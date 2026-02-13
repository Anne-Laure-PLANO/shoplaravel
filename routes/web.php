<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PageController::class,'home'])->name('welcome');


Route::get('/',function(){
    return view('welcomeLaravel');
})->name('welcome');

#Informations générales :
Route::get('/about',[PageController::class, 'about'])
    ->name('about');

Route::get('/home',[PageController::class,'home'])
    ->name('home');

Route::get('/contact', [PageController::class, 'contact'])
    ->name('contact');

#Profil Administrateur :
#affichage général
Route::get('/admin', [AdminController::class, 'dashboard'])->middleware('auth','admin')
    ->name('admin.dashboard');


#affichage produit sélectionné :
Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class);

# Authentification
Route::get('/auth/', [LoginController::class, 'login'])->name('auth.showForm');
Route::post('/auth/connexion', [LoginController::class, 'testLog'])->name('auth.testLog');
Route::post('/auth/logout', [LogoutController::class, 'logout'])->name('auth.logout');

# Inscription
Route::get('/register', [RegisterController::class, 'register'])->name('register.showForm');
Route::post('/register/createUser', [RegisterController::class, 'createUser'])->name('register.createUser');

# pour CartController :
Route::get('/cart/', [CartController::class, 'displayCart'])->name('cart.display');
Route::put('/cart/add/{product}', [CartController::class, 'addItem'])->name('cart.addItem');
Route::get('/cart/increase/{productId}', [CartController::class, 'increaseQuantity'])->name('cart.increaseQuantity');
Route::get('/cart/decrease/{productId}', [CartController::class, 'decreaseQuantity'])->name('cart.decreaseQuantity');
Route::get('/cart/deleteItem/{product}', [CartController::class, 'removeItem'])->name('cart.removeItem');
Route::delete('/cart/clearCart', [CartController::class, 'clearCart'])->name('cart.clearCart');






?>
