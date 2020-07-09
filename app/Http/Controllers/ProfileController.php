<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Subscription;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return View('betube.channel.about-me', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        
        if (Auth::user()->id === $id)
            return view('betube.channel.setting',compact('user'));
        return view('betube.channel.about-me',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProfileRequest $request, $id)
    {
        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->channel_name = $request->channel_name;
        $user->description = $request->description;
        $user->save();

        return redirect()->back()->with('success', 'Update Successfully!');
    }

    public function uploadAvatar(ProfileRequest $request, $id)
    {
        $user = User::find($id);

        if ($request->hasFile('image_avatar')) {
            $user->clearMediaCollection('images');

            $user->addMediaFromRequest('image_avatar')
                ->toMediaCollection('images');
        }

        return redirect()->back();
    }

    public function uploadBackgroundImage(ProfileRequest $request, $id)
    {
        $user = User::find($id);

        if ($request->hasFile('image_cover')) {
            $user->clearMediaCollection('covers');

            $user->addMediaFromRequest('image_cover')
                ->toMediaCollection('covers');
        }

        return redirect()->back();
    }

    public function indexChangePassword()
    {
        if(isset($_GET['email']))
        {
            $tokenDB = DB::select('select * from users where email = "'.$_GET['email'].'"');
        
            if ($_GET['token'] === $tokenDB[0]->token) {
                $token = $_GET['token'];
                $tokenExpire = Crypt::decrypt($token);
                $currentTime = time();
                if ($tokenExpire < $currentTime){ 
                    return view('betube.page404');
                }
            } else 
                return view('betube.page404');
        }
        if (isset(Auth::user()->email)) {
            return view('betube.auth.change-pass');
        } else if (isset($_GET['token'])) {
            return view('betube.auth.change-pass');
        }
            
        return redirect()->route('home');
    }
    
    public function changePassword(ProfileRequest $request, $id)
    {
        $user = User::find($id);
        $current_pass = $user->password;
        
        if (Hash::check($request->old_password, $current_pass)) {
            $user->password = Hash::make($request->new_password);
            $user->save();
            return redirect()->back()->with('success', 'Change password successfully!');
        } else {
            return  redirect()->back()->with('error', 'Wrong password! ');
        }
    }

    public function getSubscriber($id)
    {
        $user = User::find($id);
        $getUser = Subscription::where('user_subscribe', $id)->paginate(8);

        if(Auth::id()== $id)
            return view('betube.channel.subscriptions', compact('user', 'getUser'));
        return view('betube.channel.about-me',compact('user'));
    }
}
