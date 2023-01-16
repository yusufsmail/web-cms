<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\session;

class RegisterController extends Controller
{
    public function index(){

        return view('register.index',[
            'title'=> 'Register'
        ]);
    }
    public function store(Request $request){

        $validateData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255'],
            'email' => 'required|email:dns',
            'password' => 'required|min:8|max:16',
        ]);
        
        // $validateData['password'] = bcrypt($validateData ['password']);
        $validateData['password'] = Hash::make($validateData['password']);
        
        User::create($validateData);
        // $request->session()->flash('success', 'Registration successfull! Please login');
        return redirect('/login')->with('success', 'Registration successfull! Please login');
    }
}
