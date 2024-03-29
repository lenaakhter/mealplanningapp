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

    public function item($id)
    {
        //Method created to get a certain product from the table. If it not assigned an ID in the table it will not show.
        $item = Recipe::findOrFail($id);
        return view('item', ['item' => $item]);
    }

}
