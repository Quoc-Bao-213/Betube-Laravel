<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

// Controller cho homepage
// Controller cho categories
// Controller cho mỗi profile

// --- TODOS --- 
// 1. Hoàn chỉnh hompage
// 2. Hoàn chỉnh profile 
// 3. explore sidebar (set active)

// route tạm 

// Route::get('/admin', function () {
//     return view('home-admin');
// });

// Route::get('/loginadmin', function () {
//     return view('admin.auth.login');
// });

// Route::get('/video', function () {
//     return view('betube.video');
// });

// Route::get('/categories', function () {
//     return view('betube.categories');
// });

// Route::get('/forgotpass', function () {
//     return view('betube.auth.forgot-pass');
// });

// ON WORK (USE FOR TEST)
// Route::get('/about-me', function () {
//     return view('betube.profile.about-me');
// });

// Route::get('/setting', function () {
//     return view('betube.profile.setting');
// });

// Route::get('/favorite', function () {
//     return view('betube.profile.favorite');
// });

// Route::get('/follower', function () {
//     return view('betube.profile.follower');
// });

// Route::get('/profile-video', function () {
//     return view('betube.profile.profile-video');
// });

// Route::get('/upload', function () {
//     return view('betube.profile.upload');
// });
// END

Route::get('/register','RegisterController@index')->name('register');
Route::post('/register','RegisterController@register')->name('actionRegister');

Route::get('/login','LoginUserController@index')->name('login')->middleware('guest');
Route::post('/login','LoginUserController@login')->name('actionLogin');

Route::post('/logout','LoginUserController@logout')->name('actionLogout');

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function(){
    
});