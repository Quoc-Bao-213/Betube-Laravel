<?php

namespace App\Http\Controllers;

use App\VideoType;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {   
        return view('betube.search');
    }
    
}
