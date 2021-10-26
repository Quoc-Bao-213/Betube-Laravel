<?php

use App\Http\Middleware\Admin;
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

// Register
Route::get('/register','RegisterController@index')->name('register')->middleware('guest');
Route::post('/register','RegisterController@register')->name('actionRegister');

// Login
Route::get('/login','LoginUserController@index')->name('login')->middleware('guest');
Route::post('/login','LoginUserController@login')->name('actionLogin');

// Logout
Route::post('/logout','LoginUserController@logout')->name('actionLogout');

// Forgot Password
Route::get('/forgot-password', 'ResetpasswordController@index')->name('forgot-password');
Route::post('/forgot-password', 'ResetpasswordController@resetPassword')->name('action-forgot-password');
Route::post('/link-reset-password', 'ResetpasswordController@sendLinkResetFromGmail')->name('send-link-reset-password');
Route::post('/change-pass','ResetpasswordController@processChangePassword');

// Home Betube
Route::get('/', 'HomeController@index')->name('home');

// Index Information User
Route::get('/about-me/{id}','ProfileController@show')->name('about-me');

// Index Changepassword
Route::get('/change-pass','ProfileController@indexChangePassword')->name('change-password');

// Index Video
Route::get('videos/{video}', 'VideoController@show')->name('video');
Route::post('videos/{video}', 'VideoController@updateViews');
Route::get('channel/{channel}/videos', 'ChannelController@showVideos')->name('channel-videos');
Route::get('videos/{video}/comments', 'CommentController@index');
Route::get('comments/{comment}/replies', 'CommentController@show');
Route::get('result', 'SearchController@index')->name('action-search');

// Search Detail Video
Route::get('/categories/{categories}', 'CaregoriesContronller@index')->name('categories');

// Contact
Route::get('contact-us', function() {
    return view('betube.contact');
})->name('contact');

// User
Route::middleware('auth')->group(function() {
    // Action Profile
    Route::get('/upload-profile/{id}','ProfileController@edit')->name('upload-profile');
    Route::post('/upload-profile/{id}','ProfileController@update')->name('action-upload-profile');
    Route::post('/upload-image/{id}', 'ProfileController@uploadAvatar')->name('action-upload-avatar');
    Route::post('/upload-image-cover/{id}', 'ProfileController@uploadBackgroundImage')->name('action-upload-cover');
    Route::post('/change-pass/{id}','ProfileController@changePassword')->name('action-change-password');
    Route::get('subscriptions/{id}','ProfileController@getSubscription')->name('subscription');
    Route::get('subscribers/{id}','ProfileController@getSubscribers')->name('subscribers');
    
    // Action Video
    Route::get('upload-video/{channel}/videos', 'UploadVideoController@index')->name('upload-video');
    Route::post('upload-video/{channel}/videos', 'UploadVideoController@store')->name('action-upload-video');
    Route::get('update-video/{id}/videos','UploadVideoController@edit')->name('update-video');
    Route::post('update-video/{id}/videos','UploadVideoController@update')->name('action-update-video');
    Route::get('video/{id}/delete', 'UploadVideoController@destroy')->name('action-delete-video');
    
    // Action  subscription
    Route::post('channels/{channel}/subscriptions', 'SubscriptionController@store');
    Route::delete('channels/{channel}/subscriptions/{subscriptions}', 'SubscriptionController@destroy');
    
    // Action Like & Dislike
    Route::post('votes/{entityID}/{type}', 'VoteController@vote');
    Route::delete('votes/{id}/delete', 'VoteController@deleteVote');

    // Action Comment
    Route::post('comments/{video}', 'CommentController@store');
    Route::delete('comments/{comment}', 'CommentController@destroy');

    // Action playlist
    Route::get('playlist', 'PlaylistController@index')->name('playlist');
    Route::get('user/{id}/playlist', 'PlaylistController@getPlaylists');
    
    Route::get('playlist/{id}', 'PlaylistController@show')->name('edit-playlist');
    Route::post('edit-playlist/{id}', 'PlaylistController@editPlaylist');
    
    Route::post('playlist/create', 'PlaylistController@create');
    Route::post('playlist/{id}/video/{video}', 'PlaylistController@addingToPlaylist');

    Route::get('videos/{video}/list/{playlist}', 'VideoController@showWithPlaylist');
    Route::post('playlist/{id}/delete', 'PlaylistController@deletePlaylist');
    
    // Playlist Detail
    Route::put('playlist-detail/update', 'PlaylistController@updatePlaylistDetail');
    Route::post('playlist-detail/{id}', 'PlaylistController@destroy');
});
