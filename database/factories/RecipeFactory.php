<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $foodchoices = ["Cookies", "Fried Chicken", "Braised Pork", "Chicken Curry", "Tikka Masala"];
        $foodOrigin = ["Philippines", "Southeast Asia", "Japan", "Korea", "China"];
        $foodSteps =  "This is step 1, This is step 2, This is step 3, This is step 4, This is step 5, This is step 6, This is step 7";

        return [
            "name" => $foodchoices[fake()->biasedNumberBetween(0, count($foodchoices) - 1) ],
            "description" =>fake()->paragraph(5),
            "ingredients" => "food, cooking, bake",
            "cooking_type" => "stir fry",
            "duration" => 30,
            "origin" => $foodOrigin[fake()->biasedNumberBetween(0, count($foodOrigin) - 1) ],
            "steps" => $foodSteps

        ];
    }
}
