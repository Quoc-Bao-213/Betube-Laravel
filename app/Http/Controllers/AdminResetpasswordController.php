<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminResetpasswordRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AdminResetpasswordController extends Controller
{

   public function index()
   {    
        return view('admin.auth.forgot-pass');
   }

   public function sendLinkResetPasswordAdmin()
   {
      return view('admin.auth.link-reset-pass-admin');
   }

   public function formReset()
   {
      return view('admin.auth.form-reset-pass');
   }
   public function resetPassAdmin(Request $request)
   {
      
      $emailAdmin = $request->email;
      $user = User::where('email',$emailAdmin)->first();
      if(!$user)
      {
         return redirect()->back()->with('error','Email your type not exists!');
      }
 
      $url = route('send-link-reset-password-admin', ['email' => $emailAdmin]);

      $data = [
          'email' => $emailAdmin,
          'route' => $url,
   
      ];
      if($user->isAdmin())
      {
         Mail::send('admin.auth.link-reset-pass-admin', $data, function($message) use ($emailAdmin, $user) {
            $message->to($emailAdmin, $user->name)->subject('Get a password admin!');
         });
         return redirect()->back()->with('success','Link get password sent your email!');  
      }else{
         return redirect()->back()->with('error','Your not is admin');
      }
   }
   
   public function updatePasswordAdmin(AdminResetpasswordRequest $request)
   {
      
      $email = $_GET['email'];
      $password = Hash::make($request->new_password);
      DB::update("update users set password = '".$password."' where email = '".$email."'");
      return redirect()->back()->with('success','Change password success!');
   }
}
