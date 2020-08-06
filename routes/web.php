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

// Route::get('/loginadmin', function () {
//     return view('admin.auth.login');
// });

// END


Route::middleware(Admin::class)->group(function() {

    Route::get('/admin/administrator','HomeAdminController@index')->name('home-admin');
    Route::get('/admin/profile', 'AdminManageController@adminProfile')->name('profile');

    // User
    Route::get('/admin/manage-user', 'AdminManageController@manageUser')->name('manage-user');
    Route::get('/admin/manage-user/add-user/', 'AdminManageController@indexAddUser')->name('add-user');
    Route::post('/admin/manage-user/add-user/', 'AdminManageController@addUser')->name('add-user');
    Route::post('admin/manage-user/delete-user/{id}', 'AdminManageController@deleteUser')->name('delete-user');

    // Subscription
    Route::get('/admin/manage-subscription', 'AdminManageController@manageSubscription')->name('manage-subscription');
    Route::post('/admin/delete-subscription/{id}', 'AdminManageController@deleteSubscription')->name('delete-subscription');

    // Video
    Route::get('/admin/manage-video', 'AdminManageController@manageVideo')->name('manage-video');

    // Video Type
    Route::get('/admin/manage-videotype', 'AdminManageController@manageVideoType')->name('manage-videotype');
    Route::get('/admin/manage-videotype/add-video-type', 'AdminManageController@indexAddVideoType')->name('add-videotype');
    Route::get('/admin/manage-videotype/edit-video-type/{id}', 'AdminManageController@indexEditVideoType')->name('add-videotype');
    Route::post('/admin/manage-videotype/add-video-type', 'AdminManageController@addVideoType')->name('add-videotype');
    Route::post('/admin/manage-videotype/edit-video-type/{id}', 'AdminManageController@editVideoType')->name('edit-videotype');
    Route::post('/admin/manage-videotype/delete-video-type/{id}', 'AdminManageController@deleteVideoType')->name('delete-videotype');

    // Comment
    Route::get('/admin/manage-comment', 'AdminManageController@manageComment')->name('manage-comment');
    Route::post('admin/manage-comment/delete-comment/{id}' , 'AdminManageController@deleteComment')->name('delete-comment');
    // Vote
    Route::get('/admin/manage-vote', 'AdminManageController@manageVote')->name('manage-vote');

});


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
Route::post('videos/{video}', 'VideoController@updateViews');

Route::get('channel/{channel}/videos', 'ChannelController@showVideos')->name('channel-videos');

Route::get('videos/{video}/comments', 'CommentController@index');
Route::get('comments/{comment}/replies', 'CommentController@show');

Route::get('result', 'SearchController@index')->name('action-search');

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
    Route::get('video/{id}/delete', 'UploadVideoController@destroy')->name('action-delete-video');

    Route::post('votes/{entityID}/{type}', 'VoteController@vote');
    Route::delete('votes/{id}/delete', 'VoteController@deleteVote');

    Route::get('subscriptions/{id}','ProfileController@getSubscriber')->name('subscriber');

    Route::post('comments/{video}', 'CommentController@store');
    Route::delete('comments/{comment}', 'CommentController@destroy');

    Route::get('user/{id}/playlist', 'PlaylistController@getPlaylists');
    Route::post('playlist/create', 'PlaylistController@create');
    Route::post('playlist/{id}/video/{video}', 'PlaylistController@addingToPlaylist');
    Route::post('playlist-detail/{id}', 'PlaylistController@destroy');

    Route::get('playlist', 'PlaylistController@index')->name('playlist');
    Route::get('playlist/{id}', 'PlaylistController@show')->name('edit-playlist');
    Route::post('edit-playlist/{id}', 'PlaylistController@editPlaylist');
    Route::post('playlist/{id}/delete', 'PlaylistController@deletePlaylist');

    Route::get('videos/{video}/list/{playlist}', 'VideoController@showWithPlaylist');

    Route::put('playlist-detail/update', 'PlaylistController@updatePlaylistDetail');

    Route::get('/categories/{categories}', 'CaregoriesContronller@index')->name('categories');
});
