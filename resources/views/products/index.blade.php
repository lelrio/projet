@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Dashboard</div>
                <div class="panel-body"> 
                    <div>Product creation</div> 
                     <a href="{{ route('products.create')}}" class="btn btn-sm btn-primary">create</a>
                    <table class="table">
                        @forelse($products as $object)
                        <tr>
                            <td>{{$product->name}}</td>
                            <td>
                                <a href="{{ route('products.edit', $user->id)}}" class="btn btn-sm btn-info">Edit</a>
                                <form method="delete" action="{{ route('products.destroy', $user->id)}}">
                                @csrf
                                    {{method_field('DELETE')}}
                                    <input type="submit" value="Delete" onclick="return confirm('Are you sure ?')" class="btn btn-sm btn-danger">
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

@endsection