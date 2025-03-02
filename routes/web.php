<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;

Route::resource('estudiantes', EstudianteController::class);

Route::get('/', function () {
    return view('welcome');
});
