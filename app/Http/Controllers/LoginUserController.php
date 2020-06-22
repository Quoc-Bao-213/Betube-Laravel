<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginUserController extends Controller
{
    public function index()
    {
        return view('betube.auth.login');
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        if(Auth::attempt(['email'=> $email,'password' => $password]))
        {
            return redirect()->route('home');
        }
        return redirect()->route('login');

    }
}
