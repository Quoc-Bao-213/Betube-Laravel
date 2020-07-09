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

// Route::get('/admin', function () {
//     return view('home-admin');
// });

// Route::get('/loginadmin', function () {
//     return view('admin.auth.login');
// });

// END

Route::get('/register','RegisterController@index')->name('register')->middleware('guest');
Route::post('/register','RegisterController@register')->name('actionRegister');

Route::get('/login','LoginUserController@index')->name('login')->middleware('guest');
Route::post('/login','LoginUserController@login')->name('actionLogin');

Route::post('/logout','LoginUserController@logout')->name('actionLogout');

Route::get('/forgot-password', 'ResetpasswordController@index')->name('forgot-password');
Route::post('/forgot-password', 'ResetpasswordController@resetPassword')->name('action-forgot-password');
Route::post('/link-reset-password', 'ResetpasswordController@sendLinkResetFromGmail')->name('send-link-reset-password');
Route::post('/change-pass','ResetpasswordController@processChangePassword');

Route::get('/about-me/{id}','ProfileController@show')->name('about-me');

Route::get('/', 'HomeController@index')->name('home');

Route::get('/change-pass','ProfileController@indexChangePassword')->name('change-password');

Route::get('videos/{video}', 'VideoController@show')->name('video');
Route::put('videos/{video}', 'VideoController@updateViews');

Route::get('channel/{channel}/videos', 'ChannelController@showVideos')->name('channel-videos');

Route::middleware('auth')->group(function() {

    Route::get('/upload-profile/{id}','ProfileController@edit')->name('upload-profile');
    Route::post('/upload-profile/{id}','ProfileController@update')->name('action-upload-profile');
    Route::post('/upload-image/{id}', 'ProfileController@uploadAvatar')->name('action-upload-avatar');
    Route::post('/upload-image-cover/{id}', 'ProfileController@uploadBackgroundImage')->name('action-upload-cover');
    
    Route::post('/change-pass/{id}','ProfileController@changePassword')->name('action-change-password');
    
    Route::post('channels/{channel}/subscriptions', 'SubscriptionController@store');
    Route::delete('channels/{channel}/subscriptions/{subscriptions}', 'SubscriptionController@destroy');

    Route::get('upload-video/{channel}/videos', 'UploadVideoController@index')->name('upload-video');
    Route::post('upload-video/{channel}/videos', 'UploadVideoController@store')->name('action-upload-video');

    Route::get('update-video/{id}/videos','UploadVideoController@edit')->name('update-video');
    Route::post('update-video/{id}/videos','UploadVideoController@update')->name('action-update-video');

    Route::post('votes/{video}/{type}', 'VoteController@vote');
    Route::delete('votes/{video}/delete', 'VoteController@deleteVote');

    Route::get('subscriptions/{id}','ProfileController@getSubscriber')->name('subscriber');
});