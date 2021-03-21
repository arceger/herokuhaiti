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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home2', [App\Http\Controllers\HomeController::class, 'index2'])->name('home2');
Route::get('/home3', [App\Http\Controllers\HomeController::class, 'index3'])->name('cadastrar');

//Route::post('/home', [App\Http\Controllers\HomeController::class, 'CadastrarAssociado@store'])->name('cadastrar_usr');
//Route::post('/home', 'Associado@store')->name('Associado');

