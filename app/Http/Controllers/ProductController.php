<?php

namespace App\Http\Controllers;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\Controller;
use App\{Product};
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth:admin');
    }

    
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create() {
        return view('products.create');
    }

    public function store(Request $request){
        
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:555',
            'price' => 'required|min:1|max:6',  
        ]);

        $product = new Product;
        if($request->file('imageurl')) {
            $image = $request->file('imageurl');
            $imageName = time() .'.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/products');
            $image->move($destinationPath, $imageName);
            $product->imageurl = $imageName;
        }
        $product->name = $request->name;
        $product->description = $request->description;
        $product->slug = $request->name;
        $product->price = $request->price;
        $product->save();
       
        return redirect()->route('products');
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect()->back();
    }

    public function update(Request $request, Product $product){

        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:555',
            'price' => 'required|min:1|max:6',

        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $request->image = $name;
        }else{
            $name = $product->find($request->id)->imageurl;
        }
        

        $product->update($request->all());
        return redirect()->route('products');
    }

    public function edit(Request $request,Product $product){      
        return view('products.edit', compact('product'));
    }

    public function showProduct(Request $request, $slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('products.productpage',[
            //'basket' => $this->basket,
            'product' => $product
            ]);
    }
}