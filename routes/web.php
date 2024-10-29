<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AspirasiController;

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
    return view('welcome',[
    'title' => 'Home'
    ]);
});

Route::get('/profile', [AspirasiController::class, 'profile']);
Route::get('/login', [loginController::class, 'index']);
Route::post('/login', [loginController::class, 'login']);
Route::post('/logout', [loginController::class, 'logout']);
Route::get('/',[AspirasiController::class, 'index'])->name('aspirasi');
Route::post('/aspirasi',[AspirasiController::class,'post'])->name('aspirasi');
Route::post('/aspirasi/{id}', [AspirasiController::class,'update'])->name('aspirasi.update');
Route::delete('/aspirasi/{id}',[AspirasiController::class,'destroy'])->name('aspirasi.delete');
Route::get('/admin', [AspirasiController::class, 'admin'])->name('profile');




