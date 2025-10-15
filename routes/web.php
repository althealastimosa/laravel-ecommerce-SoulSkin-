<?php

use Illuminate\Support\Facades\Route;

// Redirect root to login page
Route::get('/', function () {
    return redirect()->route('login');
});

// Login routes
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', function () {
    return "Login form submitted!";
})->name('login.submit');

// Registration routes
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', function () {
    return "Registration form submitted!";
})->name('register.submit');
