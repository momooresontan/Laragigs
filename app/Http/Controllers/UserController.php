<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        ]);
    }
}
