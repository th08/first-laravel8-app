<?php

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
    return view('welcome');
});

Auth::routes();

Route::group(['middleware'=>'auth'], function(){

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
    Route::get('/clientes', [App\Http\Controllers\ClienteController::class, 'index'])->name('cliente.home');
    Route::get('/clientes/create', [App\Http\Controllers\ClienteController::class, 'create'])->name('cliente.create');
    Route::post('/clientes/create/save', [App\Http\Controllers\ClienteController::class, 'store'])->name('cliente.create.save');
    
    Route::get('/clientes/edit/{id}', [App\Http\Controllers\ClienteController::class, 'edit'])->name('cliente.edit');
    Route::post('/clientes/edit/{id}/update', [App\Http\Controllers\ClienteController::class, 'update'])->name('cliente.edit.update');

    Route::get('clientes/delete/{id}', [App\Http\Controllers\ClienteController::class, 'destroy'])->name('cliente.delete');
});
