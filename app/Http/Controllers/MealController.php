<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MealController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $meals = Meal::all();
        return view('meals.index', compact('meals'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('meals.create');
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
    
        Meal::create($request->all());
    
        return redirect()->route('meals.index')->with('success', 'Meal added successfully.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Meal $meal)
    {
        return view('meals.show', compact('meal'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Meal $meal)
    {
        return view('meals.edit', compact('meal'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Meal $meal)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
    
        $meal->update($request->all());
    
        return redirect()->route('meals.index')->with('success', 'Meal updated successfully.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Meal $meal)
    {
        $meal->delete();
    
        return redirect()->route('meals.index')->with('success', 'Meal deleted successfully.');
    }
    
}
