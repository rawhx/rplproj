<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ViewPageController;
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

// login
Route::get('/login', [LoginController::class, 'view'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::group(['middleware' => 'auth'], function(){
    Route::get('/', [ViewPageController::class, 'index'])->name('index');
    Route::get('/admin/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/admin', [PesanController::class, 'view'])->name('pesan');
});

Route::group(['middleware' => 'guest'], function(){
    Route::post('/', [PesanController::class, 'create_pesan'])->name('send_massage');
    Route::get('/', [ViewPageController::class, 'index'])->name('index');
});




