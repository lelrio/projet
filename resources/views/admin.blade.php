@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Dashboard</div>
                <div class="panel-body">
                    You are logged as <strong>Admin</strong> 
                    <div>List of Admins</div> 
                    <a href="{{ route('users.create')}}" class="btn btn-sm btn-primary">create</a>
                    <table class="table">
                        @forelse($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>
                                <a href="{{ route('users.edit', $user->id)}}" class="btn btn-sm btn-info">Edit</a>
                                <form method="post" action="{{ route('users.destroy', $user->id)}}">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" onclick="return confirm('Are you sure ?')" class="btn btn-sm btn-danger">
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