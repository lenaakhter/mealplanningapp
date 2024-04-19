<?php

namespace App\Http\Controllers;  // Correct namespace for controllers

use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller  // Ensure it extends the base Controller
{
    public function index()
    {
        $quote = Quote::inRandomOrder()->first();
        return view('mindfulness', compact('quote'));
    }
}
