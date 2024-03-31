<?php

use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RecipeController::class, "index"]);

Route::get('recipe/{id}', [RecipeController::class, "show"]);

Route::get('login', function () {});

Route::get('register', function() {});

Route::get('admin', function() {});




