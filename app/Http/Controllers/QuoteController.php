<?php

namespace App\Http\Controllers;  // Correct namespace for controllers

use App\Models\Quote;
use Illuminate\Http\Request;
use App\Models\Image;

class QuoteController extends Controller  // Ensure it extends the base Controller
{
    public function index()
    {
        $quote = Quote::inRandomOrder()->first();
        $images = Image::all();


        return view('mindfulness', compact('quote', 'images'));
    }
}
