@extends('layouts.app')

@section('style')
<style>
    
</style>
@endsection

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
                <form method="POST" action="{{route('users.store')}}">
                    @csrf
                    <div class="card card-default">
                        <div class="card-header">
                            <h5>Create User</h5></div>
                        <div class="card-body">
                            <div class="alert alert-danger" style="display: none;"><strong>Whoops!</strong> There were some problems with your input.
                                <br>
                                <br>
                                <ul></ul>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-md-3 col-form-label text-md-right">Name</label>
                                <div class="col-md-8">
                                    <input type="text" id="name" placeholder="Name"  name="name" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-md-3 col-form-label text-md-right">Email</label>
                                <div class="col-md-8">
                                    <input type="email" id="email" placeholder="Email" name="email"  autocapitalize="off" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-md-3 col-form-label text-md-right">Password</label>
                                <div class="col-md-8">
                                    <input type="password" placeholder="Password" name="password" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                    <div class="col-md-11">
                                        <div class="text-right mt-3">
                                                <b-button variant="primary" type="submit" value="save">Create</b-button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection