<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function ShowRegister(){
        return view ('pages.register');
    }
}
