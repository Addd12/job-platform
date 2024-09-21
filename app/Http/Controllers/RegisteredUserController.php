<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use App\Models\User;

class RegisteredUserController extends Controller
{
    public function create(){
        return view('auth.register');
    }

    public function store(){
        //validate
        $attributes = request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', Password::min(6), 'confirmed'], //pass confirmation
        ]);

        //create the user
        $user = User::create($attributes);
        
        //login
        Auth::login($user);
        
        //redirect
        return redirect('/jobs');
    }
}
