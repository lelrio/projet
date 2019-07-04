@extends('layouts.app')

@section('style')
<style>
    .scale{
        width: 100px;
        margin: 30px 30px 0 0;
    }
    .card-header{
        display: flex;
        justify-content: space-between;
    }
</style>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                @csrf   
                <div class="card card-default">
                    <div class="card-header">
                            <h1>Admin product Dashboard </h1> 
                            <h5 class="mt-3"> You are logged as <strong>{{ Auth::user()->name }}</strong> </h5>
                    </div>
                    <div class="text-right">
                        <b-button class="scale" variant="primary" href="{{ route('products.create')}}">create</b-button>
                    </div>
                    <div class="card-body">
                        <h4 class="mb-4 mt-3">Products</h4> 
                        <table class="table">
                            @forelse($products as $product)
                            <tr>
                                <td>{{$product->name}}</td>
                                <td style="display:flex; float:right;">
                                    <b-button variant="info" href="{{ route('products.edit', $product->id)}}" style="width:100px;margin-right:20px;">Edit</b-button>
                                    <form method="delete" action="{{ route('products.destroy', $product->id)}}">
                                    @csrf
                                        {{method_field('DELETE')}}
                                        <b-button type="submit" value="Delete" onclick="return confirm('Are you sure ?')" variant="danger">Supprimer</b-button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td>
                                    No Records found
                                </td>
                            </tr>
                            @endforelse
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection