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

use App\Http\Controllers\LegajosController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('posts', 'PostsController');

Route::get('/home', 'HomeController@index')->name('home');  

Route::get('/inicio', 'HomeController@inicio')->name('inicio');

Route::post('/message/send', 'MessagesController@message')->name('messages.send');

Route::get('/message', 'MessagesController@enviarMsj')->name('messages.create');

Route::get('/message/{id}', 'MessagesController@show')->name('messages.show');

Route::patch('notificaciones/{id}', 'NotificationsController@read')->name('notifications.read');

Route::delete('notificaciones/{id}', 'NotificationsController@destroy')->name('notifications.delete');

Route::get('notificaciones', 'NotificationsController@index')->name('notifications.index');


Route::get('/posts', 'PostsController@crearPost')->name('posts.crear');


Route::post('/posts/send', 'PostsController@enviar')->name('posts.enviar');

Route::resource('legajos','LegajosController');



// Route::group(['middleware' => 'auth'], function()
// {
//     Route::resource('user', 'UserController', ['only' => ['index']]);
// });

// Route::group(['middleware' => 'auth'], function()
//  {
//     Route::resource('user', 'UserController');
// });







Route::middleware(['auth'])->group(function () {
   
	//Roles
	Route::post('roles/store', 'RoleController@store')->name('roles.store')
		->middleware('permission:roles.create');

	Route::get('roles', 'RoleController@index')->name('roles.index')
		->middleware('permission:roles.index');

	Route::get('roles/create', 'RoleController@create')->name('roles.create')
		->middleware('permission:roles.create');

	Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
		->middleware('permission:roles.edit');

	Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
		->middleware('permission:roles.show');

	Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
		->middleware('permission:roles.destroy');

	Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
        ->middleware('permission:roles.edit');
        
	//Users
	Route::get('users', 'UserController@index')->name('users.index')
		->middleware('permission:users.index');

	Route::put('users/{user}', 'UserController@update')->name('users.update')
		->middleware('permission:users.edit');

	Route::get('users/{user}', 'UserController@show')->name('users.show')
		->middleware('permission:users.show');

	Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
		->middleware('permission:users.destroy');

	Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
		->middleware('permission:users.edit');





});