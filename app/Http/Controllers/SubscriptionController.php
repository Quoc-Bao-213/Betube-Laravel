<?php

namespace App\Http\Controllers;

use App\Subscription;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubscriptionController extends Controller
{
    public function store(User $channel)
    {
        return $channel->subscriptions()->create([
            'user_subscribe' => auth()->user()->id
        ]);
    }

    public function destroy(Request $request)
    {
        $id = explode("/", $request->path());
        $subscription = Subscription::find($id[3]);
        
        $subscription->delete();

        return response()->json(['Delete Successfull']);
    }
    
    
}
