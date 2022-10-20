<?php

use Illuminate\Support\Facades\Route;
//llamamos a todos los controladores que usaremos 
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\Orlando;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OficinaController;

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

Route::get('/usuarios', function() {
    return "Aqui van los usuarios";
});

Route::get('/productos',[ProductoController::class, 'listar']
);

Route::get('/Orlando',[Orlando::class, 'listar']
);

Route::get('/oficinas',[OficinaController::class, 'listar']
);
 //creando una ruta para listar clientes 
Route::get('/clientes',[CustomerController::class,'listar']);

