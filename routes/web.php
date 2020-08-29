<?php

use Illuminate\Support\Facades\Route;

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


Route::resource('service','ServiceController')->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/* Inicia rutas para perfil de usuario */
Route::get('profile/create', 'ProfileController@create')->name('profile.create')->middleware('auth');
Route::post('profile', 'ProfileController@store')->name('profile.store')->middleware('auth');
Route::get('profile/edit', 'ProfileController@edit')->name('profile.edit')->middleware('auth');
Route::put('profile/update', 'ProfileController@update')->name('profile.update')->middleware('auth');
/* == Finaliza rutas para perfil de usuario == */

/* Inicia ruta para eliminar usuario */
Route::delete('user/delete', 'ProfileController@destroy')->name('user.destroy')->middleware('auth');
/* == Finaliza ruta para eliminar usuario == */

