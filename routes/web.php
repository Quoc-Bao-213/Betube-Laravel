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

// Admin
Route::get('/admin/login','LoginAdminController@index')->name('login-admin');
Route::post('/admin/login','LoginAdminController@login')->name('action-login-admin');
Route::post('/admin/logout','LoginAdminController@logout')->name('action-logout-admin');

Route::middleware(Admin::class)->group(function() {
    Route::prefix('admin')->group(function(){
        
        // Admin (Statistic)
        Route::get('administrator','HomeAdminController@index')->name('home-admin');

        // Manage User
        Route::prefix('manage-user')->group(function(){
            Route::get('/', 'AdminManageController@manageUser')->name('manage-user');
            Route::get('add-user', 'AdminManageController@indexAddUser')->name('add-user');
            Route::post('add-user', 'AdminManageController@addUser')->name('add-user');
            Route::get('edit-user/{id}', 'AdminManageController@indexEditUser')->name('edit-user');
            Route::post('edit-user/{id}', 'AdminManageController@editUser')->name('edit-user');
            Route::post('delete-user/{id}', 'AdminManageController@deleteUser')->name('delete-user');
        });
      
        // Manage Subscription
        Route::get('manage-subscription', 'AdminManageController@manageSubscription')->name('manage-subscription');
        Route::post('delete-subscription/{id}', 'AdminManageController@deleteSubscription')->name('delete-subscription');
    
        // Manage Video
        Route::get('manage-video', 'AdminManageController@manageVideo')->name('manage-video');
        Route::get('manage-video/{id}', 'AdminManageController@indexEditVideo')->name('edit-video');
        Route::post('manage-video/{id}', 'AdminManageController@editVideo')->name('edit-video');
    
        // Manage Video Type
        Route::prefix('manage-videotype')->group(function(){
            Route::get('/', 'AdminManageController@manageVideoType')->name('manage-videotype');
            Route::get('add-video-type', 'AdminManageController@indexAddVideoType')->name('add-videotype');
            Route::get('edit-video-type/{id}', 'AdminManageController@indexEditVideoType')->name('add-videotype');
            Route::post('add-video-type', 'AdminManageController@addVideoType')->name('add-videotype');
            Route::post('edit-video-type/{id}', 'AdminManageController@editVideoType')->name('edit-videotype');
            Route::post('delete-video-type/{id}', 'AdminManageController@deleteVideoType')->name('delete-videotype');
        });
       
        // Manage Comment
        Route::get('manage-comment', 'AdminManageController@manageComment')->name('manage-comment');
        Route::post('manage-comment/delete-comment/{id}' , 'AdminManageController@deleteComment')->name('delete-comment');
    
        // Manage Playlist 
        Route::prefix('manage-playlist')->group(function(){
            Route::get('/', 'AdminManageController@managePlaylist')->name('manage-playlist');
            Route::get('add-playlist', 'AdminManageController@indexAddPlaylist')->name('add-playlist');
            Route::get('edit-playlist/{id}', 'AdminManageController@indexEditPlaylist')->name('edit-playlists');
            Route::post('add-playlist', 'AdminManageController@addPlaylist')->name('add-playlist');
            Route::post('edit-playlist/{id}', 'AdminManageController@editPlaylist')->name('edit-playlists');
            Route::post('delete-playlist/{id}', 'AdminManageController@deletePlaylist')->name('delete-playlist');
        });
       
        // Manage Playlist Detail
        Route::get('manage-playlistdetail', 'AdminManageController@managePlaylistDetail')->name('manage-playlistDetail');
        Route::post('manage-playlistdetail/delete-playlist-detail/{id}', 'AdminManageController@deletePlaylistDetail')->name('delete-playlistDetail');

        // Manage Vote
        Route::get('manage-vote', 'AdminManageController@manageVote')->name('manage-vote');
   
    });
});


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


// User
Route::middleware('auth')->group(function() {
    // Action Profile
    Route::get('/upload-profile/{id}','ProfileController@edit')->name('upload-profile');
    Route::post('/upload-profile/{id}','ProfileController@update')->name('action-upload-profile');
    Route::post('/upload-image/{id}', 'ProfileController@uploadAvatar')->name('action-upload-avatar');
    Route::post('/upload-image-cover/{id}', 'ProfileController@uploadBackgroundImage')->name('action-upload-cover');
    Route::post('/change-pass/{id}','ProfileController@changePassword')->name('action-change-password');
    Route::get('subscriptions/{id}','ProfileController@getSubscriber')->name('subscriber');
    

    
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
