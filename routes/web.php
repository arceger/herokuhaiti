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


//Route::get('/cadastrar', [App\Http\Controllers\HomeController::class, 'index3'])->name('cadastrar');

Route::get('/caddep', [App\Http\Controllers\CadastrarDepend::class, 'create']); 
Route::post('/caddep', [App\Http\Controllers\CadastrarDepend::class, 'store'])->name('cadastrar_dep');
//Route::get('/cadastrar', [App\Http\Controllers\CadastrarAssociado::class, 'create']); 
//Route::post('/cadastrar', [App\Http\Controllers\CadastrarAssociado::class, 'store'])->name('cadastrar_usr');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home2', [App\Http\Controllers\HomeController::class, 'index2'])->name('home2');
