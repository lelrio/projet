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
                    <div class="card-header">Admin Dashboard object creation</div>
                        <div class="card-body">
                            <form method="POST" action="{{route('products.store')}}" enctype="multipart/form-data">
                                @csrf
                                Name:
                                <input type="text" name="name" class="form-control">
                                <br>
                                Image:
                                <input type="file" name="imageurl" class="form-control">
                                <br>
                                Description:
                                <input type="text" name="description" class="form-control">
                                <br>
                                Prix:
                                <input type="text" name="price" class="form-control">
                                <br>
                                <input type="submit" value="save" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection