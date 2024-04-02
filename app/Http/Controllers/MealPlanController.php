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

    public function index() {
        $mealplan =  DB::table('meal_plans')
        ->where('meal_plans.userID', '=', auth()->id())
        ->join('recipes', 'meal_plans.recipeID', '=', 'recipes.id')
        ->join('meal_times', 'meal_times.mealTimeID', '=', 'meal_times.id')
        ->select('meal_plans.mealPlanID', 'recipes.*', 'meal_times.*')
        ->get();

        // if (count($basket) == 0) {
        //     return view('emptybasket');
        // }

        return view('mealplan', [
            'mealplan' => $mealplan,
        ]);
    }

    // Function to add product to basket
    public function add(Request $request)
    {
    $recipeID = $request->recipe;

    $mealplan = MealPlan::create([
        'userID' => auth()->id(),
        'recipeID' => $recipeID, 
    ]);

    return back()->with('success', 'Product added to your basket.');
    return view('mealplan', [ 'recipes' => $recipes ]);
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


}
