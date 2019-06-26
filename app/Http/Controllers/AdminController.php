<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\{Admin, User};
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $admins = Admin::all();
        $users = User::all();
        return view('admin', compact('admins', 'users'));
    }
    public function show(){
        return view('admin.create');
    }
    public function store(Request $request){
        Admin::create($request->all());
        return redirect()->route('admin');
    }
    public function destroy(User $user){
        $user->delete();
        return redirect()->route('admin');
    }
}
