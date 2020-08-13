<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminResetpasswordController extends Controller
{

   public function index()
   {    
        return view('admin.auth.forgot-pass');
   }
   
   public function resetPassAdmin(Request $request)
   {
  
      $emailAdmin = 'admin@gmail.com';
      $email = $request->email;
      if($emailAdmin === $email)
      {
         $password= Hash::make('admin');
         DB::update("update users set password = '".$password."' where email = '".$emailAdmin."'");
         return redirect()->back()->with('success', 'Password have been reset!');
      }else{
         return redirect()->back()->with('error','Your not is admin');
      }
   }

}
