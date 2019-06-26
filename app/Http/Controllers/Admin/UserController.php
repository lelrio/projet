<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function show()
    {
        return view('admin.users.create');
    }
    
    public function store(Request $request){
        User::create($request->all());
        return redirect()->route('admin');
    }
    public function update(Request $request, User $user){
        $user->update($request->all());
        return redirect()->route('admin');

    }
    public function edit(Request $request, User $user){      
        return view('admin.users.edit', compact('user'));
    }
}
