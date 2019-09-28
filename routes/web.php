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


Route::middleware(['auth'])->group(function () {
   
    // Productos
    Route::post('products/store', 'ProductController@store')->name('products.store')
                                                        ->middleware('permission:products.create');
    Route::get('products', 'ProductController@index')->name('products.index')
                                                        ->middleware('permission:products.index');
    Route::get('products/create', 'ProductController@create')->name('products.create')
                                                        ->middleware('permission:products.create');
    Route::put('products/{role}', 'ProductController@update')->name('products.update')
                                                        ->middleware('permission:products.edit');
    Route::get('products/{role}', 'ProductController@show')->name('products.show')
                                                        ->middleware('permission:products.show');
    Route::delete('products/{role}', 'ProductController@destroy')->name('products.destroy')
                                                        ->middleware('permission:products.destroy');
    Route::get('products/{role}/edit', 'ProductController@edit')->name('products.edit')
                                                        ->middleware('permission:products.edit');



    // // Usuarios
    // Route::post('products/store', 'ProductController@store')->name('products.store')
    //                                                     ->middleware('permission:products.create');
    // Route::get('products', 'ProductController@index')->name('products.index')
    //                                                     ->middleware('permission:products.index');
    // Route::get('products/create', 'ProductController@create')->name('products.create')
    //                                                     ->middleware('permission:products.create');
    // Route::put('products/{role}', 'ProductController@update')->name('products.update')
    //                                                     ->middleware('permission:products.edit');
    // Route::get('products/{role}', 'ProductController@show')->name('products.show')
    //                                                     ->middleware('permission:products.show');
    // Route::delete('products/{role}', 'ProductController@destroy')->name('products.destroy')
    //                                                     ->middleware('permission:products.destroy');
    // Route::get('products/{role}/edit', 'ProductController@edit')->name('products.edit')
    //                                                     ->middleware('permission:products.edit');
        

                                                        
    // // Roles
    // Route::post('products/store', 'ProductController@store')->name('products.store')
    //                                                     ->middleware('permission:products.create');
    // Route::get('products', 'ProductController@index')->name('products.index')
    //                                                     ->middleware('permission:products.index');
    // Route::get('products/create', 'ProductController@create')->name('products.create')
    //                                                     ->middleware('permission:products.create');
    // Route::put('products/{role}', 'ProductController@update')->name('products.update')
    //                                                     ->middleware('permission:products.edit');
    // Route::get('products/{role}', 'ProductController@show')->name('products.show')
    //                                                     ->middleware('permission:products.show');
    // Route::delete('products/{role}', 'ProductController@destroy')->name('products.destroy')
    //                                                     ->middleware('permission:products.destroy');
    // Route::get('products/{role}/edit', 'ProductController@edit')->name('products.edit')
    //                                                     ->middleware('permission:products.edit');
});