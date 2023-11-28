<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\GaleriaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//Rutas de Proyectos
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::resource('/Proyectos', ProyectoController::class);
    Route::get('/home', function () {
        return view('home');
        
    })->name('home');   
});
//Rutas de galerias
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::resource('/Galerias', GaleriaController::class);
    Route::get('/home', function () {
        return view('home');
        
    })->name('home');   
});




