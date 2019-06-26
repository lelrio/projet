@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Dashboard object creation</div>
                <div class="panel-body">
                <form method="POST" action="{{route('products.store')}}">
                    @csrf
                    Name:
                    <input type="text" name="name" class="form-control">
                    <br>
                    <input type="file" name="image" class="form-control">
                    <br>
                    <input type="text" name="description" class="form-control">
                    <br>
                    <input type="text" name="price" class="form-control">
                    <br>
                    <input type="submit" value="save" class="btn btn-primary">
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection