<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

// Route::get('/', function () {
//     return view('welcome');
// });

//Route::resource('clientes-prestadores', 'App\Http\Controllers\ClientePrestadorController');  
Route::get('/novo', function () {
    return view('novo');
})->name('novo');

Route::resource('clientes', ClienteController::class);
