@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">

            <div class="row justify-content-center">
                <div class="col-md-4">
                    <img src="{{asset("images/products/$product->imageurl")}}" alt="{{ $product->title }}" class="img-fluid img-thumbnail">
                </div>
                <div class="col-md-8">
                    <h3>{{ $product->name }}</h3>
                    <br>
                    <p>{{ $product->description }}</p>
                    <h5>{{ $product->price }}$</h5>
                    <a href="{{ route('cart.pushProduct', ['slug' => $product->slug, 'quantity' => 1]) }}" class="btn btn-primary">Add to cart</a>
                    <a href="{{ route('order.index') }}" class="btn btn-primary">Checkout</a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
