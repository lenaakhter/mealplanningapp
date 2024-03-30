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
        $MealPlan = new MealPlan;
        $MealPlan->email = Auth::user()->email;
        //assigning recipe ID to a variable using recipe controller
        $recipes = Recipe::find('id');
        $MealPlan->recipe_id = $recipes->id;
        $MealPlan->save();
    }



}
