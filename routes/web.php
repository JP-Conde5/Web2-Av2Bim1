<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
})->name('inicio');

Route::get('/exibirLocais', [App\Http\Controllers\controllerViagem::class, 'index'])->name('indexLocal');
Route::get('/local/create', [App\Http\Controllers\controllerViagem::class, 'create'])->name('novoLocal');
Route::post('/local/store', [App\Http\Controllers\controllerViagem::class, 'store'])->name('gravaNovaViagem');
Route::get('/local/editar/{id}', [App\Http\Controllers\controllerViagem::class, 'edit'])->name('editarViagem');
Route::post('/local/{id}', [App\Http\Controllers\controllerViagem::class, 'update'])->name('atualizar');
Route::get('/local/apagar/{id}', [App\Http\Controllers\controllerViagem::class, 'destroy'])->name('apagar');

