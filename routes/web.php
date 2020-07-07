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

//Dashboard
Route::get('/', 'HomeController@index' );

//Pendidikan
Route::get('/pendidikan', 'PendidikanController@index' );

//Pengalaman Bekerja
Route::get('/pengalamanbekerja', 'PengalamanBekerjaController@index' );

//Keterampilan
Route::get('/keterampilan', 'KeterampilanController@index' );

//Training
Route::get('/training', 'TrainingController@index' );

//Profile
Route::get('/profile', 'ProfileController@index' );

//Portfolio
Route::get('/portfolio', 'PortfolioController@index' );

//Portfolio Register
Route::get('/portfolio/register', 'RegisterController@index' );
Route::post('/portfolio/register', 'RegisterController@store' );

//Portfolio Login
Route::get('/portfolio/login', 'LoginController@index' );
Route::post('/portfolio/login', 'LoginController@store' );

//Portfolio Login
Route::get('/portfolio/userprofile', 'UserProfileController@index' );

//Portfolio Chat
Route::get('/portfolio/chat', 'ChatController@index' );
Route::post('/portfolio/send', 'ChatController@send' );

//Portfolio Course
Route::get('/portfolio/course', 'CourseController@index' );

//Portfolio Course Sololearn
Route::get('/portfolio/course/sololearn', 'SololearnController@index' );

//Portfolio Course Udemy
Route::get('/portfolio/course/udemy', 'UdemyController@index' );

//Portfolio Course Youtube
Route::get('/portfolio/course/youtube', 'YoutubeController@index' );

//Portfolio Guestbook
Route::get('/portfolio/guestbook', 'GuestbookController@index');

Route::resource('/portfolio/guestbook', 'GuestbookController');
Route::get('/portfolio/guestbook/{id}/delete', ['as' => 'guestbook.delete', 'uses' => 'GuestbookController@destroy']);




