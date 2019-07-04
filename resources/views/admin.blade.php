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
                        <h1>Admin Dashboard</h1>
                        <h5 class="mt-3 ml-3"> You are logged as <strong>{{ Auth::user()->name }}</strong> </h5>
                    </div>
                    <div class="text-right">
                        <b-button variant="primary" href="{{ route('users.create')}}" class="scale">Create</b-button>
                    </div>
                    <div class="card-body">
                            <h4 class="mb-4 mt-3">Users</h4> 
                            <table class="table">
                                @forelse($users as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td style="display:flex; float:right;">
                                        <b-button href="{{ route('users.edit', $user->id)}}" variant="info" style="width:100px;margin-right:20px;">Edit</b-button>
                                        <form method="post" action="{{ route('users.destroy', $user->id)}}">
                                            @csrf
                                            @method('delete')
                                            <b-button type="submit" onclick="return confirm('Are you sure ?')" variant="danger">Supprimer</b-button>
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