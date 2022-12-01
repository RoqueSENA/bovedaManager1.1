<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\FondosController;

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

//Crea una la ruta raiz y llama la vista login de usuarios

Route::view('/', 'login');  

Route::view('home','usuarios.home');

/* 
    Crea rutas a los recursos de FondosController y 
    muestra una lista de fondos
*/

Route::resource('fondos', FondosController::class);


/* 
    Crea rutas  a los recursos de UsuariosController y 
    muestra una lista de usuarios
*/

Route::resource('usuarios', UsuariosController::class);
