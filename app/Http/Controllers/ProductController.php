<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('/products/index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() # pour appeler le formulaire de création d'un nouveau produit
    {
        $categories = Category::all();
        return view('products/create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) #récupère les infos nouveau produit pour insertion BDD
    {
        $product = new Product();
        $product->category_id = $request->category_id;
        $product->name = $request->name;
        $product->slug = Str::slug($request->name);
        $product->description = $request->description;
        $product->image = $request->image;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->active = $request->active;
        $product->save();
    return redirect('/products');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $product= Product::find($id);
        return view('/products/detailArticle',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
