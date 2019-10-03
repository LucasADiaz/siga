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

//rutas para controlar el modulo POST  ----------------------
Route::get('/posts', 'PostsController@crearPost')->name('posts.crear');
Route::post('/posts/send', 'PostsController@enviar')->name('posts.enviar');

//rutas para controlar el modulo Legajos --------------------
Route::get('/legajos/new', 'LegajosController@crearLegajo')->name('legajos.crear');
Route::post('/legajos/new','LegajosController@store')->name('legajos.guardar');

//rutas para controlar el modulo de Notas -------------------
Route::resource('nota', 'NotaController');
Route::get('obtener_curso/{id}', 'NotaController@obtener_cursos')->name('obtener_cursos');
Route::get('nota/{id_materia}/{id_curso}', 'NotaController@mostrar_alumnos')->name('mostrar_alumnos');




