<?php

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

Route::get('/', function () {
    return view('vue');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**
 * Common
 */
Route::get('/ajax/notification', 'Common\NotificationController@getNotifications');
Route::get('/ajax/announcement', 'Common\AnnouncementController@getAnnouncement');


/**
 * Member
 */
Route::get('/ajax/member/userprofile', 'Member\MemberController@getUserProfile');



/**
 * Govhack
 */
Route::get('/ajax/population/{year}', 'Govhack\ReportController@getPopulation');



/**
 * Final vuejs
 */
Route::get('/{vue?}', function () { return view('vue'); })->where('vue', '[\/\w\.-]*');