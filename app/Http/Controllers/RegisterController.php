<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('betube.auth.register');
    }
    public function register(Request $request)
    {
        $user = new User;
        $email = $request->email;
        $password = $request->password;

        $checkUserDB = $user::where('email',$email)->exists();  
        
        if(!$checkUserDB)
        {
            $user->email = $email;
            $user->password = Hash::make($password);
            $user->save();
            return redirect()->route('register')->with('success','Register Successfully!');
        }else{
            return redirect()->route('register')->with('error','Your email already exists!');
        }
        
    }


}
