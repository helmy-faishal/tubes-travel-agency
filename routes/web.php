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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/', 'App\Http\Controllers\HomepageController@index')->name('hompage');

Route::get('/blog', 'App\Http\Controllers\BlogController@index')->name('blog.index');

Route::get('/profile', 'App\Http\Controllers\ProfileController@index')->name('profile.index');
Route::get('/profile/edit', 'App\Http\Controllers\ProfileController@edit')->name('profile.edit');
Route::put('/profile', 'App\Http\Controllers\ProfileController@update')->name('profile.update');

Route::get('/paket', 'App\Http\Controllers\BookingController@index')->name('booking.index');
Route::post('/paket', 'App\Http\Controllers\BookingController@payment')->name('booking.payment');
Route::get('/paket/bayar', 'App\Http\Controllers\BookingController@create')->name('booking.create');
Route::post('/paket/bayar', 'App\Http\Controllers\BookingController@store')->name('booking.store');

Route::get('/kontak', function () {
    return view('layouts.kontak.index');
})->name('kontak.index');