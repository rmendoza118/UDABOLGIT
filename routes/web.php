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

Route::group([
    'prefix' => '/',
    'middleware' => 'auth'
], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    // CALCULADORA
    Route::get('/calculadora', [App\Http\Controllers\CalculadoraController::class, 'index'])->name('home');
    
    Route::post('/calculadora', [App\Http\Controllers\CalculadoraController::class, 'calculate'])->name('home');
});


