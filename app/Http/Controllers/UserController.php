<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //SHow register form
    public function create(){
        return view('users.register');
    }
}
