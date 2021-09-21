<?php

use App\Http\Controllers\SorteioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsuariosController;

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

Route::get('/',[SorteioController::class,'index'])->name('welcome');

Route::get('sorteio/create',[SorteioController::class,'create'])->name('create')->middleware('auth');;
Route::post('/sorteio',[SorteioController::class,'store']);
Route::get('/perfil',[SorteioController::class,'perfil']);
Route::get('/dashboard',[SorteioController::class,'dashboard'])->name('dashboard')->middleware('auth');
Route::get('/comprarrifa/{id}',[SorteioController::class,'show'])->name('comprarrifa');

Route::get('/cadastro',[UsuariosController::class,'cadastro'])->name('cadastro');
Route::post('/cadastrar',[UsuariosController::class,'store'])->name('cadastrar');
Route::get('/login',[UsuariosController::class,'login'])->name('login');
Route::post('/logar',[UsuariosController::class,'logar'])->name('logar');
Route::get('/logout',[UsuariosController::class,'logout'])->name('logout');




