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
use App\Post;
Route::get('/', function () {

    $titulo = "Centro Comercial Chiriyacu";
    return view('home')
        ->with('titulo', $titulo);
});


Auth::routes();

Route::get('/blog', 'BlogController@index')->name('blog_index');
Route::get('/blog/{slug}', 'BlogController@show')->name('blog_detail');

Route::get('/event', 'EventController@index')->name('event');
Route::get('/event/{slug}', 'EventController@show')->name('event_detail');

Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

