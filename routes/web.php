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
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();

Route::resource('usuarios', 'App\Http\Controllers\CrudController');


Route::resource('capturista', 'App\Http\Controllers\CapturistaController');

Route::resource('tecnico', 'App\Http\Controllers\TecnicoController');


Route::resource('programador', 'App\Http\Controllers\ProgramadorController');




Route::resource('tipo', 'App\Http\Controllers\LoginController');


Route::post('logined', function () {
    $credentials = request()->only('email','password');
    if(Auth::attempt($credentials)){
        return redirect('tipo');
    }
    return redirect('login');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
