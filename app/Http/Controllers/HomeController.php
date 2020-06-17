<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    // public function upload(Request $request)
    // {
    //     if ($request->hasFile('ten_input')) {
    //         $files = $request->ten_input;
    //         // Duyệt qua tất cả file
    //         foreach($files as $file) {
    //         // Lưu file
    //         $file->store('thu_muc');
    //         }
    //         return 'upload tập tin thành công';
    //     }
    //     return 'upload tập tin thất bại';
    // }
}
