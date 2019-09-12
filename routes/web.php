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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/inicio', 'HomeController@inicio')->name('inicio');

Route::post('/message/send', 'MessagesController@message')->name('messages.send');

Route::get('/message', 'MessagesController@enviarMsj')->name('messages.create');

Route::get('/message/{id}', 'MessagesController@show')->name('messages.show');

Route::patch('notificaciones/{id}', 'NotificationsController@read')->name('notifications.read');

Route::delete('notificaciones/{id}', 'NotificationsController@destroy')->name('notifications.delete');

Route::get('notificaciones', 'NotificationsController@index')->name('notifications.index');

