@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Dashboard edit</div>
                <div class="panel-body">
                <form method="POST" action="{{route('users.update', $user->id)}}">
                    @csrf
                    Name:
                <input type="text" name="name" value="{{$user->name}}" required class="form-control">
                    <br>
                    Email: 
                    <input type="email" name="email" value="{{$user->email}}" required class="form-control">
                    <br>
                    Password:
                    <input type="password" name="password" class="form-control" required>
                    <br>
                    <input type="submit" value="save" class="btn btn-primary">
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection