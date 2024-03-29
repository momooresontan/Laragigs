<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //SHow register form
    public function create(){
        return view('users.register');
    }

    //Create new user
    public function store(Request $request){
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email'=> ['required','email', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed', 'min:6'],
        ]);

        //Hash password
        $formFields['password'] = bcrypt($formFields['password']);

        //Create user
        $user = User::create($formFields);

        //Login
        auth()->login($user);

        return redirect('/')->with('success', 'User created successfully!');
    }

    //Logout user
    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'User logged out!');
    }

    //Show login form
    public function login(){
        return view('users.login');
    }

    //Authenticate user
    public function authenticate(Request $request){
        $formFields = $request->validate([
            'email'=> ['required','email'],
            'password' => ['required'],
        ]);

        if(auth()->attempt($formFields)){
            $request->session()->regenerate();

            return redirect('/')->with('success', 'User logged in!');
        }
        return back()->withErrors(['email' => 'Invalid username or password!'])->onlyInput('email');
    }
}
