<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }
    public function show(Product $product)
    {
        return $product;
    }
    public function store(Request $request)
    {
        $product = Product::create($request->all());
        return response()->json($product, 201);
    }
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return response()->json($product, 200);

    }
    public function delete(Request $request, Product $product)
    {

        $product->delete();
        return response()->json(null, 200);
    }
}
