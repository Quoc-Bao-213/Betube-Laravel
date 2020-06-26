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

Route::get('/forgot-password', 'ResetpasswordController@index')->name('forgot-password');
Route::post('/forgot-password', 'ResetpasswordController@resetPassword')->name('action-forgot-password');
Route::post('/link-reset-password', 'ResetpasswordController@sendLinkResetFromGmail')->name('send-link-reset-password');
Route::get('/change-pass','ResetpasswordController@changePasswordFromLinkGmail')->name('change-password');
Route::post('/change-pass','ResetpasswordController@processChangePassword');


// ON WORK (USE FOR TEST)
// Route::get('/favorite', function () {
//     return view('betube.profile.favorite');
// });

// Route::get('/follower', function () {
//     return view('betube.profile.follower');
// });

// Route::get('/profile-video', function () {
//     return view('betube.profile.profile-video');
// });

Route::get('/upload', function () {
    return view('betube.profile.upload');
});
// END

Route::get('/register','RegisterController@index')->name('register')->middleware('guest');
Route::post('/register','RegisterController@register')->name('actionRegister');

Route::get('/login','LoginUserController@index')->name('login')->middleware('guest');
Route::post('/login','LoginUserController@login')->name('actionLogin');

Route::post('/logout','LoginUserController@logout')->name('actionLogout');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about-me/{id}','ProfileController@show')->name('about-me');


Route::get('/change-pass','ProfileController@indexChangePassword')->name('change-password');


Route::middleware('auth')->group(function() {

    Route::get('/upload-profile/{id}','ProfileController@edit')->name('upload-profile');
    Route::post('/upload-profile/{id}','ProfileController@update')->name('action-upload-profile');
    Route::post('/upload-image/{id}', 'ProfileController@uploadAvatar')->name('action-upload-avatar');
    Route::post('/upload-image-cover/{id}', 'ProfileController@uploadBackgroundImage')->name('action-upload-cover');
    
    Route::post('/change-pass/{id}','ProfileController@changePassword')->name('action-change-password');
    
    Route::post('channels/{channel}/subscriptions', 'SubscriptionController@store');
    Route::delete('channels/{channel}/subscriptions', 'SubscriptionController@destroy');

});