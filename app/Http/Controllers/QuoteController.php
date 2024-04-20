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
        $images = Image::inRandomOrder()->take(8)->get();

        return view('mindfulness', compact('quote', 'images'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:2048'
        ]);

        $path = $request->file('image')->store('images', 'public');
        Image::create(['path' => $path]);

        return back()->with('success', 'Image uploaded successfully.');
    }
}
