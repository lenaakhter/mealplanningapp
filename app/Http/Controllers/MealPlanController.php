<?php
// app/Http/Controllers/MealPlanController.php

namespace App\Http\Controllers;
use App\Models\MealPlan;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class MealPlanController extends Controller
{

    //Adding a recipe to the meal plan
    public function addToMealPlan (Request $request){
        // Assuming the $request object contains the ID of the recipe to add to the meal plan.
    
        // Create a new instance of the MealPlan model. This is preparing a new record to be saved in the database.
        $MealPlan = new MealPlan;

        // Assign the email of the currently authenticated user to the 'email' field of the MealPlan. This associates the meal plan with a specific user.
        $MealPlan->email = Auth::user()->email;
    
        // Retrieve the recipe ID from the request. This is the ID of the recipe that the user wants to add to their meal plan.
        $recipeId = $request->id; 

        // Find the recipe in the database using the Recipe model. This looks up a recipe by its ID.
        $recipes = Recipe::find($recipeId);
    
        // Check if the recipe was found. If not, redirect back with an error message.
        if (!$recipes) {
            return redirect()->back()->withErrors('Recipe not found.');
        }
    
        // Assign the found recipe's ID to the 'recipe_id' field of the MealPlan. This links the recipe to the meal plan.
        $MealPlan->recipe_id = $recipes->id;
    
        // Retrieve the calories for the recipe from the 'recipes' table in the database. This is done by filtering the table by the recipe's ID and getting the 'calories' value.
        $calories = DB::table('recipes')
            ->where('id', $recipeId) 
            ->value('calories');
        $carbohydrates = DB::table('recipes')
            ->where('id', $recipeId) 
            ->value('carbohydrates');
        $fats = DB::table('recipes')
            ->where('id', $recipeId) 
            ->value('fats');
        $protein = DB::table('recipes')
            ->where('id', $recipeId) 
            ->value('protein');
    
        // Assign the retrieved nutritional values to the MealPlan instance. This stores the nutritional information directly in the meal plan record.
        $MealPlan->calories = $calories;
        $MealPlan->carbohydrates = $carbohydrates;
        $MealPlan->fats = $fats;
        $MealPlan->protein = $protein;

    
         // Save the MealPlan instance to the database. This creates a new record in the meal plan table with all the specified data.
        $MealPlan->save();
    
        // Redirect the user back to the previous page with a success message. This confirms that the recipe was successfully added to the meal plan.
        return redirect()->back()->with('message', 'Recipe added to Meal Plan');
    }
    



}
