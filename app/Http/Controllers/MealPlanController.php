<?php
// app/Http/Controllers/MealPlanController.php

namespace App\Http\Controllers;
use App\Models\MealPlan;
use App\Models\MealTime;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class MealPlanController extends Controller
{

    public function index(Request $request) {
        $day = $request->input('day');  // Get the day from the query string
    
        $query = DB::table('meal_plans')
            ->where('meal_plans.userID', '=', auth()->id())
            ->join('recipes', 'meal_plans.recipeID', '=', 'recipes.id')
            ->select('meal_plans.mealPlanID', 'meal_plans.dayOfWeek', 'recipes.*');
    
        if ($day) {
            $query->where('meal_plans.dayOfWeek', $day); // Filter by the day of the week if provided
        }
    
        $mealplan = $query->get();
    
        return view('mealplan', [
            'mealplan' => $mealplan,
            'selectedDay' => $day,
        ]);
    }
    

    // Function to add product to basket
    public function add(Request $request){
    $recipeID = $request->recipe;
    $dayOfWeek = $request->input('dayOfWeek');
    $mealplan = new MealPlan();

    $mealplan -> userID = auth()->id();
    $mealplan -> recipeID = $recipeID;

    $mealplan -> mealtime = request('mealtime');
    $mealplan -> dayOfWeek = $dayOfWeek;


    $maxCalories = $this->calculateMaxCalories();
    $dayCalories = $this->getDayCalories($dayOfWeek);

    print($maxCalories);
    $recipeitem = Recipe::findOrFail($recipeID);
    $itemcalories = $recipeitem->calories;

    if ($dayCalories + $itemcalories > $maxCalories) {
        return response()->json(['error' => 'Total calories exceed recommended intake. Please remove some recipes.'], 400);}
    else{
        $mealplan->save();
    }

    return back()->with('success', 'Product added to your basket.');

    }


    //
    public function get(Request $request) {
        return DB::table('meal_plans')
        ->where('meal_plans.userID', '=', auth()->id())
        ->select('meal_plans.*');
    }

    //Get total amount of users basket (does not need total column on basket table)
    public function getBasketTotalAmount(Request $request) {
        return DB::table('meal_plans')
            ->where('meal_plans.userID', '=', auth()->id())
            ->join('recipes', 'meal_plans.recipeID', '=', 'recipes.id')
            ->sum('recipes.calories');
    }



    public function calculateMaxCalories(){
        $user = auth()->user();
        if (!$user) {
            // Handle the case where there is no authenticated user
            return response()->json(['error' => 'Unauthorized access'], 401);
        }
    
        $age = $user->age ?? null; // Using null coalescing in case 'age' is not set
        $gender = $user->gender ?? null; // Using null coalescing in case 'gender' is not set
    
        if (is_null($age) || is_null($gender)) {
            // Handle cases where necessary information is not available
            return response()->json(['error' => 'User age or gender not specified'], 400);
        }
    
        if ($gender === 'male') {
            if ($age >= 65) return 2300;
            if ($age >= 55) return 2400;
            if ($age >= 45) return 2500;
            return 2700; // This covers all younger age groups
        } else {
            if ($age >= 65) return 2000;
            if ($age >= 45) return 2000; // Same value for all ages 45 and up
            return 2200; // This covers all younger age groups
        }
    }
    





    public function getDayCalories($dayOfWeek) {
        return DB::table('meal_plans')
            ->where('meal_plans.userID', '=', auth()->id())
            ->where('meal_plans.dayOfWeek', '=', $dayOfWeek) 
            ->join('recipes', 'meal_plans.recipeID', '=', 'recipes.id')
            ->sum('recipes.calories');
    }




    //Get basket for user with product price included (does not need total column on basket table)
    public function getDetailedBasket(Request $request) {
        return DB::table('meal_plans')
        ->where('meal_plans.userID', '=', auth()->id())
        ->join('recipes', 'meal_plans.recipeID', '=', 'recipes.id')
        ->select('meal_plans.*', 'recipes.calories');
    }

    //Removing product from basket
    public function remove(Request $request)
    {
        error_log($request->mealPlanID);
        MealPlan::where('mealPlanID', $request->mealPlanID)->delete();

        return back()->with('success', 'Product removed from your basket.');
    }

    //Checkout function 
    public function checkout(Request $request)
    {
    $mealplan = MealPlan::where('userID', auth()->id())->where('completed', false)->firstOrFail();

    // Here, you might add payment processing before completing the order
    // For simplicity, we're directly marking it as completed

    $mealplan->completed = true;
    $mealplan->save();

    return redirect()->route('item')->with('success', 'Checkout completed successfully.');
    }

    public function addRecipe(Request $request)
    {
        // Get user's age and gender
        $userAge = $request->input('age');
        $userGender = $request->input('gender');

        // Calculate recommended calories based on age and gender
        $recommendedCalories = $this->calculateRecommendedCalories($userAge, $userGender);

        // Get the IDs of the recipes to add
        $recipeIds = $request->input('recipe_ids');

        // Fetch the recipes and sum up their calories
        $totalCalories = Recipe::whereIn('id', $recipeIds)->sum('calories');

        // Compare total calories with recommended intake
        if ($totalCalories > $recommendedCalories) {
            return response()->json(['error' => 'Total calories exceed recommended intake. Please remove some recipes.'], 400);
        } elseif ($totalCalories < $recommendedCalories) {
            return response()->json(['error' => 'Total calories fall below recommended intake. Please add more recipes.'], 400);
        } else {
            // Add recipes to the meal plan
            // Code to add recipes goes here...

            return response()->json(['message' => 'Recipes added successfully.'], 200);
        }
    }


}
