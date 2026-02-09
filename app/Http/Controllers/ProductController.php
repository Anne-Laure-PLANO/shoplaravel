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
        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id', #s'assure que la clé existe bien dans la table categories
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0', #min:0 pour éviter les prix négatifs
            'stock' => 'required|numeric|min:0'
        ]);
        $product =[
            'category_id' => $validated['category_id'],
            'name' => $validated['name'],
            'slug' => Str::slug($validated['name'], '-'),
            'description' => $request->description,
            'image' => $request->image,
            'price' => $validated['price'],
            'stock' => $validated['stock'],
            'active' => $request->boolean('active')
        ];
        Product::create($product);
    return redirect()->route('admin.dashboard')->with('success', 'Produit créé avec succès!');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $product= Product::find($id);
        return view('.products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Category::all();
        $product = Product::find($id);
        return view('products.edit', compact('product'), compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name'        => 'required|string|max:255',
            'price'       => 'required|numeric|min:0',
            'stock'       => 'required|numeric|min:0',
        ]);
        $data =[
            'category_id' => $validated['category_id'],
            'name' => $validated['name'],
            'slug' => Str::slug($validated['name'], '-'),
            'description' => $request->description,
            'image' => $request->image,
            'price' => $validated['price'],
            'stock' => $validated['stock'],
            'active' => $request->boolean('active')
        ];
        Product::findOrFail($id)->update($data);
        return redirect()->route('admin.dashboard')->with('success', 'Produit modifié avec succès !');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Product::findOrFail($id);
        $data->delete();
        return redirect()->route('admin.dashboard')->with('success', 'Produit supprimé avec succès !');
    }
}
