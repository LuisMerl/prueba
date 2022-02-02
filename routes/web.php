<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\HomeController;

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
//Vista de salida de sesion
Route::get('/', function () {
    return view('welcome');
});




Auth::routes();

//Rutas pagina

Route::get('/index', [App\Http\Controllers\Controller::class, 'inicio'])->name('inicio');


// Rutas menu administrador

Route::get('/home', [App\Http\Controllers\Controller::class, 'index'])->name('home')-> middleware('auth');

Route::resource('empleado',EmpleadoController::class) -> middleware('auth'); //todas las rutas de la carpeta Empleado habilitadas

Route::resource('admin',HomeController::class)-> middleware('auth');

Route::resource('users',UserController::class)->only('index','edit', 'update')->names ('admin.users') -> middleware('auth');



