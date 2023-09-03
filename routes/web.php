<?php

use Illuminate\Support\Facades\Route;
// namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Auth\LoginController;
// use Auth;
use Illuminate\Support\Facades\Auth;


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
    return view('User.Home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('User.Home');
// Route::match(['get', 'post'], '/logout', 'Auth\LoginController@logout')->name('logout');

Route::match(['GET', 'POST'], '/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');
