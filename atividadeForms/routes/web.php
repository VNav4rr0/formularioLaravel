<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\funcaoController;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/sobrenos', function () {
    return view('sobrenos');
})->name('sobrenos');

Route::get('/contato', function () {
    return view('contato');
})->name('contato');


Route::post('/formulario', [funcaoController::class, 'handleForm']);