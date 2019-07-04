@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="panel panel-default">
                <div class="card card-default">
                    <div class="card-header">
                        <h5>Admin Dashboard product edition</h5> 
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('products.update', $product->id)}}" enctype="multipart/form-data">
                            @csrf
                            Name:
                            <input type="text" name="name" value="{{$product->name}}" required class="form-control">
                            <br>
                            Image: 
                            <input type="file" name="image" value="{{$product->image}}" class="form-control">
                            <br>
                            Description
                            <input type="text" name="description" value="{{$product->description}}" class="form-control" required>
                            <br>
                            Price
                            <input type="text" name="price" value="{{$product->price}}" class="form-control" required>
                            <br>
                            <input type="submit" value="save" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection