<?php

use App\Http\Controllers\SorteioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/',[SorteioController::class,'index']);

Route::get('sorteio/create',[SorteioController::class,'create']);
Route::post('/sorteio',[SorteioController::class,'store']);
Route::get('/perfil',[SorteioController::class,'perfil']);
Route::get('/dashboard',[SorteioController::class,'dashboard'])->name('dashboard')->middleware('auth');;
Route::get('/comprarrifa/{id}',[SorteioController::class,'show']);

Route::post('/auth',[UserController::class,'auth'])->name('auth.user');



