<?php

use Illuminate\Support\Facades\Auth;
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
    return view('medicamentos.index');
})->middleware("auth");


Auth::routes();

Route::middleware(['auth'])->group(function () {
  
Route::get('/medicamentos', [App\Http\Controllers\MedicamentosController::class, 'index']);
Route::post('/medicamentos/mostrar', [App\Http\Controllers\MedicamentosController::class, 'show']);

Route::post('/medicamentos/registro', [App\Http\Controllers\MedicamentosController::class,'store']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::post('/medicamentos/editar/{id}', [App\Http\Controllers\MedicamentosController::class,'edit']);

Route::post('/medicamentos/actualizar/{medicamentos}', [App\Http\Controllers\MedicamentosController::class,'update']);

Route::post('/medicamentos/borrar/{id}', [App\Http\Controllers\MedicamentosController::class,'destroy']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});