<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Basket\Basket;
use App\Product;


class CartController extends Controller
{
    protected $basket;

    public function index()
    {
        
        return view('cart.index', ['basket' => $this->basket]);
    }

    public function pushProduct($slug, $quantity)
    {
        $product = Product::where('slug', $slug)->firstOrFail();

        $basket = new Basket($product);
        try {
            $basket->pushProduct($product, $quantity);
        } catch (QuantityExceededException $e) {
            return redirect()->route('cart.index')->with('error', "We're sorry, we don't have enough of this product in stock.");
        }

        return redirect()->route('cart.index');
    }

    public function updateProduct(Request $request, $slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();

        $basket = new Basket($product);
        try {
            $basket->updateProduct($product, $request->quantity);
        } catch (QuantityExceededException $e) {
            return redirect()->route('cart.index')->with('error', "We're sorry, we don't have enough of this product in stock.");
        }

        return redirect()->route('cart.index');
    }
}
