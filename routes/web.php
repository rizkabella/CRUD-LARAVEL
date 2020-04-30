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

Route::get('/web/index.html', function () {
    return view('profil');
});

Route::get('/views','ViewsController@index');
Route::get('/views/create','ViewsController@create');
Route::get('/views/{views}','ViewsController@show');
Route::post('/views','ViewsController@store');
route::delete('/views/{views}','ViewsController@destroy');
route::get('/views/{views}/edit','ViewsController@edit');
route::patch('/views/{views}','ViewsController@update');
