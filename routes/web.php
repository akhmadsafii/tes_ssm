<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
// Route::middleware('guest')->group(function () {
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/sub-penjulan', 'PenjualanController@sub_penjulan')->name('sub_penjualan');

Route::get('/penjualan', 'PenjualanController@index')->name('penjualan');
Route::get('/penjualan/show/{id}', 'PenjualanController@show')->name('penjualan.show');
Route::get('/penjualan/create', 'PenjualanController@create')->name('penjualan.create');
Route::post('/penjualan', 'PenjualanController@store')->name('penjualan.store');


Route::get('/about', function () {
    return view('about');
})->name('about');
// });
