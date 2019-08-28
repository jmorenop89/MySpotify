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

/* Route::get('/', function () {
    return view('artista.index');
}) */;


#Auth::routes();

Route::get('/',['as' => 'login','uses' =>'Auth\LoginController@showLoginForm']);
Route::post('/',['as' => 'login','uses' => 'Auth\LoginController@login']);
Route::post('logout',['as' => 'logout','uses' => 'Auth\LoginController@logout']);
Route::post('password/email',['as'=>'password.email','uses'=>'Auth\ForgotPasswordController@sendResetLinkEmail']);
Route::get('password/reset',['as'=>'password.request','uses'=>'Auth\ForgotPasswordController@showLinkRequestForm']);
Route::post('password/reset',['as' =>'password.update','uses'=>'Auth\ResetPasswordController@reset']);
Route::get('password/reset/{token}',['as' =>'password.reset','uses'=>'Auth\ResetPasswordController@showResetForm']);
Route::get('registrar',['as'=>'register','uses'=>'Auth\RegisterController@showRegistrationForm']);
Route::post('registrar',['as'=>'register','uses'=>'Auth\RegisterController@register']);

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'artista'], function () {
    
    Route::get('/',['as'=>'artista.index','uses'=>'Admin\ArtistaController@index']);
    Route::get('crear',['as'=>'artista.create','uses'=>'Admin\ArtistaController@create']);
    Route::post('crear',['as'=>'artista.store','uses'=>'Admin\ArtistaController@store']);

});