<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
     public function index() {
        $recipe = Recipe::get();

        // @dd($recipe);
        return view("recipe.index", [
            "recipes" => Recipe::latest()
            
        ]);
    }

    public function show(Recipe $recipe) {
        return view("recipe.show", [
            "recipe" => Recipe::find($recipe)
        ]);
    }
}


 // Common Resource Routes:
    // index - Get all
    // show - get single
    // create - form for post
    // store - post
    // edit - form for edit
    // update - edit
    // destroy - delete

