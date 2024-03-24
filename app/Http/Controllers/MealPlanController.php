<?php
// app/Http/Controllers/MealPlanController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MealPlan;

class MealPlanController extends Controller
{
    public function index()
    {
        $mealPlans = MealPlan::all();
        return view('meal_plans.index', compact('mealPlans'));
    }

    public function create()
    {
        return view('meal_plans.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|integer',
            'date_start' => 'required|date',
            'date_end' => 'required|date',
        ]);

        $mealPlan = MealPlan::create($validated);
        return redirect()->route('meal_plans.show', $mealPlan);
    }

    public function show(MealPlan $mealPlan)
    {
        return view('meal_plans.show', compact('mealPlan'));
    }

    public function edit(MealPlan $mealPlan)
    {
        return view('meal_plans.edit', compact('mealPlan'));
    }

    public function update(Request $request, MealPlan $mealPlan)
    {
        $validated = $request->validate([
            'date_start' => 'required|date',
            'date_end' => 'required|date',
        ]);

        $mealPlan->update($validated);
        return redirect()->route('meal_plans.show', $mealPlan);
    }

    public function destroy(MealPlan $mealPlan)
    {
        $mealPlan->delete();
        return redirect()->route('meal_plans.index');
    }
}
