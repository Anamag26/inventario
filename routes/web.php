<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EscolaController;
use App\Http\Controllers\SalaController;
use App\Http\Controllers\BibliotecaController;
use App\Http\Controllers\OutrosController;
use App\Http\Controllers\InicioController;

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

Route::get('/', [EscolaController::class, 'index'])->name('index');
Route::resource('escolas', EscolaController::class);

Route::get('/', [SalaController::class, 'index'])->name('index');
Route::put('/edit', [SalaController::class, 'edit'])->name('edit');
Route::resource('salas', SalaController::class);


Route::get('/', [BibliotecaController::class, 'index'])->name('biblioteca');
Route::resource('biblioteca', BibliotecaController::class);

Route::get('/', [OutrosController::class, 'index'])->name('outros');
Route::resource('outros', OutrosController::class);

Route::get('/', [InicioController::class, 'index'])->name('inicio');
Route::resource('inicio', InicioController::class);

// update Existing Product
Route::put('sala/{id}', 'SalaController@update');
Route::put('biblioteca/{id}', 'BibliotecaController@show');
Route::put('outros/{id}', 'OutrosController@show');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
