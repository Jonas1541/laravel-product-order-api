<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // GET /api/products
    public function index()
    {
        return response()->json(Product::all());
    }

    // POST /api/products
    public function store(Request $request)
    {
        $validated = $request->validate([
           'name' => 'required|string|max:255',
           'description' => 'nullable|string',
           'price' => 'required|numeric'
        ]);
        $product = Product::create($validated);
        return response()->json($product, 201);
    }

    // GET /api/products/{id}
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return response()->json($product);
    }

    // PUT/PATCH /api/products/{id}
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $validated = $request->validate([
           'name' => 'sometimes|required|string|max:255',
           'description' => 'nullable|string',
           'price' => 'sometimes|required|numeric'
        ]);
        $product->update($validated);
        return response()->json($product);
    }

    // DELETE /api/products/{id}
    public function destroy($id)
    {
        Product::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
