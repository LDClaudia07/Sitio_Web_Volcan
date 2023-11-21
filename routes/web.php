<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;

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

//Route::resource('/Proyectos', App\Http\Controllers\ProyectoController::class);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::resource('/Proyectos', ProyectoController::class);
    Route::get('/home', function () {
        return view('home');
        
    })->name('home');
    
});
