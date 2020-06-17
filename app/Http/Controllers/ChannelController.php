<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ChannelController extends Controller
{
    
    public function index() 
    {
        return view('lrtube.home');
    }
}
