@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Dashboard creation</div>
                <div class="panel-body">
                <form method="POST" action="{{route('admin.store')}}">
                    @csrf
                    Name:
                    <input type="text" name="name" class="form-control">
                    <br>
                    <input type="submit" value="save" class="btn btn-primary">
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection