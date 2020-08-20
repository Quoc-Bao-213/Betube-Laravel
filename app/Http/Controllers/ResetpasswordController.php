<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResetpasswordRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
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
        return view('betube.auth.link-reset');
    }

    public function resetPassword(Request $request)
    {
        $getEmailFromForm = $request->email;
        $user = User::where('email',$getEmailFromForm)->first();

        if(!$user) {
            return redirect()->back()->with('error','Email your type not exists!');
        }

        $token = Crypt::encrypt(time() + 180);
        $user->token = $token;
        $user->save();
        
        $url = route('send-link-reset-password', ['code' => $user->$token, 'email' => $getEmailFromForm]);

        $data = [
            'email' => $getEmailFromForm,
            'route' => $url,
            'token' => $token
        ];
      
        Mail::send('betube.auth.link-reset', $data, function($message) use ($getEmailFromForm, $user) {
            $message->to($getEmailFromForm, $user->name)->subject('Get a password!');
        });

        return redirect()->back()->with('success','Link get password sent your email!');        
    }
    
    public function processChangePassword(ResetpasswordRequest $request)
    { 
        $email = $_GET['email'];
        $password = Hash::make($request->new_password);
        
        DB::update("update users set password = '".$password."' where email = '".$email."'");
        return redirect()->back()->with('success','Change password success!');
    }
}
