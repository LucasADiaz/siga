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

//Rutas de Alta Baja y Modificaciones de las materias
Route::resource('materias','MateriaController');

Route::get('legajos/new/docs','LegajosController@crearDocs')->name('legajos.crearDocs');

Route::post('legajos/new/','LegajosController@store')->name('legajos.store');

Route::get('legajos/new/legajocreado/{nombrealu}','LegajosController@legajoCreado')->name('legajos.legajoCreado');


Route::get('documentos/new/{nombrealu}','DocumentoController@store')->name('documentos.store');

Route::get('documentos/create','DocumentoController@create')->name('documentos.create');
//Route::resource('documentos','DocumentoController');