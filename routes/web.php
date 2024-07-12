<?php


use App\Http\Controllers\AlumnoController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('alumnos', AlumnoController::class);
