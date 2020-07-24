<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\User;
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
        $checkAdmin = User::where('is_admin', 'false')->where('email', $email)->first();

        if ($checkAdmin) {
            if(Auth::attempt(['email'=> $email,'password' => $password])) {
                return redirect()->route('home');
            }
        }
             
        return redirect()->back()->with('error',"Email or Password invalid!");
    }
    
    public function logout()
    {
        Auth::logout();
        return redirect()->back();
    }
}
