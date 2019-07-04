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
                    @csrf
                    <div class="card card-default">
                        <div class="card-header">
                            <h5>Update User</h5></div>
                            <div class="card-body">
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
        </div>
    </div>
</div>   
@endsection