<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\MealPlanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/recipes', function () {
    return view('recipes');
});

Route::get('/mealplan', function () {
    return view('mealplan');
});

Route::get('/mindfulness', function () {
    return view('mindfulness');
});

Route::get('/recipe/{id}', [RecipeController::class, 'item']); 

// Route for Recipes to be shown on recipe page
Route::get('/recipes', [RecipeController::class, 'index'])->name('recipes.index');




//Basket routing
Route::get('/mealplan', [MealPlanController::class, 'index'])->name('mealplan');

// Adding a product to basket
Route::post('/mealplan/add', [MealPlanController::class, 'add'])->name('mealplan.add');

//Removing product from basket
Route::post('/mealplan/remove', [MealPlanController::class, 'remove'])->name('mealplan.remove');

//Checkout function
Route::post('/mealplan/checkout', [MealPlanController::class, 'checkout'])->name('mealplan.checkout');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
