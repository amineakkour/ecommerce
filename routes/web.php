<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource("user", UserController::class);

Route::get("/register", [UserController::class, "create"])->name("register");
Route::get("/login", [UserController::class, "login"])->name("login");