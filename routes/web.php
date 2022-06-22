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

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
Route::prefix('/users')->group(function () {
    Route::post('/register', [\App\Http\Controllers\UsersController::class, 'register'])->name('user.register');
    Route::post('/auth', [\App\Http\Controllers\UsersController::class, 'auth'])->name('users.auth');
    Route::get('/reed/{id}', [\App\Http\Controllers\UsersController::class, 'reed'])->name('users.reed');
    Route::delete('/delete/{id}', [\App\Http\Controllers\UsersController::class, 'delete'])->name('users.delete');
});
Route::resource('tasks', \App\Http\Controllers\TaskController::class);
