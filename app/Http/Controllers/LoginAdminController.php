<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginAdminController extends Controller
{
    public function index()
    {   
        if(Auth::user() && Auth::user()->isAdmin())
        {
            return redirect()->route('home-admin'); 
        }
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password; 
        $checkAdmin = User::where('is_admin', 'true')->where('email', $email)->first();
        if($checkAdmin)
        {
            if(Auth::attempt(['email' => $email, 'password' => $password]))
                {   
                    return redirect()->route('home-admin');   
            }else{
                return redirect()->back()->with('error',"Email or Password invalid!");
            }
        }else{
            return redirect()->back()->with('error','You not is admin');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->back();
    }

}
