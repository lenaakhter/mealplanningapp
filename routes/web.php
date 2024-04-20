<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\MealPlanController;
use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;

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

Route::post('/mealplan', [MealPlanController::class, 'index'])->name('mealplan.index');

Route::get('/mindfulness', [QuoteController::class, 'index'])->name('quotes.index');
Route::post('/mindfulness',[QuoteController::class, 'store'])->name('images.store');


//Basket routing
Route::get('/mealplan', [MealPlanController::class, 'index'])->name('mealplan');

// Adding a product to basket
Route::post('/mealplan/add', [MealPlanController::class, 'add'])->name('mealplan.add');

//Removing product from basket
Route::delete('/mealplan/{mealPlanID}', [MealPlanController::class, 'remove'])->name('mealplan.remove');

//Checkout function
Route::post('/mealplan/checkout', [MealPlanController::class, 'checkout'])->name('mealplan.checkout');

// Check your registration route
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
