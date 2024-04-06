<?php

use App\Http\Controllers\RecipeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RecipeController::class, "index"]);

Route::get('login', [UserController::class, "showLogin"])->name("login")->middleware("guest");

Route::post('login', [UserController::class, "login"])->middleware("guest");

Route::get('register', [UserController::class, "showRegister"])->middleware("guest");

Route::post('register', [UserController::class, "register"])->middleware("guest");

Route::post('logout', [UserController::class, "logout"])->middleware("auth");

Route::get('admin', [RecipeController::class, "admin"])->middleware("auth");

Route::get('recipe/create', [RecipeController::class, "create"])->middleware("auth");

Route::post('recipe/{recipe}', [RecipeController::class, "store"])->middleware("auth");

Route::get('recipe/{recipe}/edit', [RecipeController::class, "edit"])->middleware("auth");

Route::put('recipe/{recipe}', [RecipeController::class, "update"])->middleware("auth");

Route::delete('recipe/{recipe}', [RecipeController::class, "destroy"])->middleware("auth");

Route::get('recipe/{recipe}', [RecipeController::class, "show"]);




