<?php

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

// pesan 
Route::post('/', [PesanController::class, 'create_pesan'])->name('send_massage');

Route::group(['middleware' => 'guest'], function(){
    Route::get('/', [ViewPageController::class, 'index'])->name('index');
});
