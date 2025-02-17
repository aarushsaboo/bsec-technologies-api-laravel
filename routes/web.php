<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/user/{id}', [UserController::class, 'show']);

Route::get('/form', [FormController::class, 'show']);
Route::post('/form', [FormController::class, 'store']);