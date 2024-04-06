<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
     public function index() {

        // @dd($recipe);
        return view("recipe.index", [
            "recipes" => Recipe::latest()->search(request(["search"]))->paginate(10)
        ]);
    }

    public function show(Recipe $recipe) {
        return view("recipe.show", [
            "recipe" => $recipe,
            "user" => $recipe->user->name
        ]);
    }

    public function admin() {
        return view("recipe.admin", [
            "recipes" => auth()->user()->recipe()->get()
        ]);
    }

    public function create() {
        return view("recipe.create");
    }

    public function store(Request $req) {
        $formFields = $req->validate([
            "name" => "required",
            "description" => "required",
            "ingredients" => "required",
            "cooking_type" => "required",
            "duration" => "required",
            "origin" => "required",
            "steps" => "required",
        ]);

        $formFields["user_id"] = auth()->id();

        Recipe::create($formFields);

        return redirect("/")->with("message", "Recipe created!");
    }

    public function edit(Recipe $recipe) {
        return view("recipe.edit", [
            "recipe" => $recipe
        ]);
    }

    public function update(Request $req, Recipe $recipe) {
        if ($recipe->user_id != auth()->id()){
            abort(403, "unauthorized Action");
        }

         $formFields = $req->validate([
            "name" => "required",
            "description" => "required",
            "ingredients" => "required",
            "cooking_type" => "required",
            "duration" => "required",
            "origin" => "required",
            "steps" => "required",
        ]);

        $recipe->update($formFields);

        return redirect("/recipe/$recipe->id")->with("message", "Recipe updated!");
    }

    public function destroy(Recipe $recipe) {
        if ($recipe->user_id != auth()->id()){
            abort(403, "unauthorized Action");
        }

        $recipe->delete();
        return redirect("/admin")->with("message", "Recipe deleted!");
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

