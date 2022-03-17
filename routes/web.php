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

Auth::routes();
Route::get('pages-login', 'SkoteController@index');
Route::get('pages-login-2', 'SkoteController@index');
Route::get('pages-register', 'SkoteController@index');
Route::get('pages-register-2', 'SkoteController@index');
Route::get('pages-recoverpw', 'SkoteController@index');
Route::get('pages-recoverpw-2', 'SkoteController@index');
Route::get('pages-lock-screen', 'SkoteController@index');
Route::get('pages-lock-screen-2', 'SkoteController@index');
Route::get('pages-404', 'SkoteController@index');
Route::get('pages-500', 'SkoteController@index');
Route::get('pages-main', 'SkoteController@index');
Route::get('pages-comingsoon', 'SkoteController@index');

Route::get('create_test', 'SkoteController@create');

Route::post('keep-live', 'SkoteController@live');

Route::get('/admin', 'HomeController@root')->name('home');
Route::get('/admin', 'HomeController@index');









Route::get('text-on-image','ImageController@textOnImage')->name('textOnImage');
Route::get('mail/send', 'MailController@send');
Route::post('/mailcheck', 'SkoteController@sendmail')->name('mailcheck');

Route::post('/verifypassword', 'SkoteController@verifypass')->name('verifypassword');




//  Route::group(['prefix' => 'admin'], function() {
//     Route::auth();
//     Route::get('/', function(){
//     if(!Auth::user()){
// 	 return view('auth.login');
// 	}else{
// 		return redirect('/admin/index');
// 	}
// });
    
// });


Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {


	

});