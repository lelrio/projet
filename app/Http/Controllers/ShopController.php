<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Request $request, Product $product)
    {
        $products = Product::all();
        return view('shop', ['products' => $products]);
    }
    public function showProduct(Request $request, Product $product){
        return Product::all();
    }
    
}