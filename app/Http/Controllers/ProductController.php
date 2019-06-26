<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\{Admin, Product};
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create() {
        return view('products.create');
    }

    public function store(Request $request){
        Product::create($request->all());
        return redirect()->route('admin');
    }

    public function destroy  (Product $product){
        $product->delete();
        return redirect()->route('admin');
    }

    public function update(Request $request, Product $product){
        $product->update($request->all());
        return redirect()->route('admin');
    }

    public function edit(){      
        return view('products.edit');
    }
}