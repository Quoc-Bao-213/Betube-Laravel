<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use Illuminate\Support\Facades\Auth;

class LoginUserController extends Controller
{
    public function index()
    {
        return view('betube.auth.login');
    }

    public function login(LoginUserRequest $request)
    {
        $email = $request->email;
        $password = $request->password;

        if(Auth::attempt(['email'=> $email,'password' => $password]))
        {
            return redirect()->route('home');
        }
        return redirect()->back()->with('error',"Email or Password invalid!");
    }
    
    public function logout()
    {
        Auth::logout();
        return redirect()->back();
    }
}
