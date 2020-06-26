<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ResetpasswordController extends Controller
{
    public function index()
    {
        return view('betube.auth.forgot-pass');
    }
    public function sendLinkResetFromGmail()
    {
        return view('link-reset');
    }

    public function resetPassword(Request $request)
    {
        $getEmailFromForm = $request->email;
        $user =  User::where('email',$getEmailFromForm)->first();

        if(!$user)
        {
            return redirect()->back()->with('notify','Email your type not exists!');
        }
        $token = Hash::make($getEmailFromForm);
        $user->token = $token;
        $user->save();
        
        

        $url = route('send-link-reset-password', ['code' => $user->$token, 'email' => $getEmailFromForm]);

        $data = [
            'email' => $getEmailFromForm,
            'route' => $url,
            'token' => $token
        ];
      
        Mail::send('betube.auth.link-reset', $data, function($message) use ($getEmailFromForm){
            $message->to($getEmailFromForm, 'Reset Password')->subject('Get a password!');
        });
        return redirect()->back()->with('notify','Link get  password sent your email!');        
    }

    public function changePasswordFromLinkGmail()
    {
        $token = $_GET['token'];
        $email = $_GET['email'];
        if(Hash::check($email, $token))
        {
            return view('betube.auth.change-password');
        }
        else{
            echo ('trang 404!');
        }
    }
    
    public function processChangePassword(ProfileRequest $request)
    {
        $email = $_GET['email'];
        $password = Hash::make($request->new_password);
        DB::update("update users set password = '".$password."' where email = '".$email."'");
        return redirect()->back()->with('notify','Change password  success!');
    }
}
