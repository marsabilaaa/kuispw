<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function available()
    {
        $products = Product::where('stock', '>', 0)->get();

        return view('products.available', compact('products'));
    }

    public function unavailable()
    {
        $products = Product::where('stock', 0)->get();

        return view('products.unavailable', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        Product::create($validatedData);

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('products.show', compact('product'), );
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        $product = Product::findOrFail($id);
        $product->update($validatedData);

        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }

    public function editStock($id)
    {
        $product = Product::findOrFail($id);

        return view('products.stock', compact('product'));
    }

    public function updateStock(Request $request, $id)
    {
        $product = Product::findOrFail($id);
    
        $request->validate([
            'stock' => 'required|integer|min:0',
        ]);
    
        $stock = $request->input('stock');
        $product->stock = $stock;
        $product->save();
    
        return redirect()->route('products.index', $product->id);
    }
    
}
