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

    public function index(){
        $mealplans = MealPlan::latest()->get();
        return view('mealplan', [
            'mealplan' => $mealplans,
        ]);
    }

    public function show($id) {

        $mealplan = MealPlan::find($id);
        return view('mealplan', ['mealplan' => $mealplan]);
    }

    //Adding a recipe to the meal plan
    public function create (Request $request){
        return view('mealplan');
    }
    



}
