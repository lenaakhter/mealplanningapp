<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Recipe;

class RecipeController extends Controller
{
    //Method to get all products and display on recipes page
    public function index(Request $request){

        $recipes = Recipe::all();
        return view('recipes', ['recipes' => $recipes]);
    }

}
