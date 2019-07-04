<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    public function show(Request $request)
    {
        if (!Auth::user()->admin) {
            return redirect()->back();
        }
        return view('admin.users.create');
    }
    
    public function store(Request $request){
        if (!Auth::user()->admin) {
            return redirect()->back();
        }
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|max:255',
        ]);

        User::create($request->all());
        return redirect()->route('admin');
    }
    public function update(Request $request, User $user){
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|max:255',
        ]);

        $user->update($request->all());
        return redirect()->route('admin');

    }
    public function edit(Request $request, User $user){  
        if(!Auth::user()->admin and Auth::user()->id != $user->id){
            return redirect()->back();
        }    
        return view('admin.users.edit', compact('user'));
    }
    public function account(Request $request, User $user){
        return view('account', compact('user'));
    }

}
