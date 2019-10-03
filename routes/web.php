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
use Illuminate\Support\Facades\Input;

Route::get('/', 'HomeController@inicio')->name('inicio');

Auth::routes();

//Rutas de Posts
Route::resource('posts', 'PostsController');

Route::post('/posts/send', 'PostsController@enviar')->name('posts.enviar');

//Rutas del Home
Route::get('/home', 'HomeController@index')->name('home');  

Route::get('/inicio', 'HomeController@inicio')->name('inicio');

//Rutas de Mensajes
Route::post('/message/send', 'MessagesController@message')->name('messages.send');

Route::get('/message', 'MessagesController@enviarMsj')->name('messages.create');

Route::get('/message/{id}', 'MessagesController@show')->name('messages.show');

//Rutas de Notificaciones
Route::patch('notificaciones/{id}', 'NotificationsController@read')->name('notifications.read');

Route::delete('notificaciones/{id}', 'NotificationsController@destroy')->name('notifications.delete');

Route::get('notificaciones', 'NotificationsController@index')->name('notifications.index');

//Rutas de Alta Baja y Modificaciones de las materias
Route::resource('materias','MateriaController');

//Rutas de Legajos
Route::resource('legajos','LegajosController');

Route::post('legajos/new/','LegajosController@store')->name('legajos.store');

Route::get('legajos/new/legajocreado/{nombrealu}','LegajosController@legajoCreado')->name('legajos.legajoCreado');

//Rutas de Documentos
Route::get('documentos/new/{nombrealu}','DocumentoController@store')->name('documentos.store');

Route::get('documentos/new/','DocumentoController@create')->name('documentos.create');

Route::get('documentos/searchdni/{dni?}','DocumentoController@searchDNI')->name('documentos.searchDNI');

Route::get('documentos/searchname/{alumno?}','DocumentoController@searchListado')->name('documentos.searchListado');

//Route::get('legajos/new/documentos','LegajosController@crearDocs')->name('legajos.crearDocs');