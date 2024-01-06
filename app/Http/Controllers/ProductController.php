<?php

namespace App\Http\Controllers;

use auth;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class ProductController extends Controller {

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('products.index', ['products' => Product::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    //....DevSteve
    public function store(Request $request)
    {
        $productData = $request->validate([
            'name' => ['required', 'min:3', 'max:255', Rule::unique('products', 'name')],
            'description' => ['required', 'min:10', 'max:255'],
            'price' => ['required', 'min:1', 'max:1000'],
            'stock' => ['required', 'min:1', 'max:600']
        ]); 
        // This will return an instance of a product $product = new Product()
        Product::create($productData);
        return redirect()->route('products.index')->with('success', 'Product created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'price' => ['required'],
            'stock' => ['required']
        ]);

        $product->update($validated);
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product Deleted');
    }
}