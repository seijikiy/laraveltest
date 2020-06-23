<?php

use Illuminate\Support\Facades\Route;
use App\Mail\SuccessMail;

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

Route::resource('home', 'ProductController');

Route::get('profile', 'UserController@profile')->middleware('auth');

Route::post('profile', 'UserController@update_avatar')->name('profile');

Route::post('submit', 'ProductController@store');

Route::get('/your-products', 'YourController@index');

Route::get('/csv_file', 'CsvFile@index')->middleware('auth');

Route::post('csv_file/import', 'CsvFile@csv_import')->name('import');











