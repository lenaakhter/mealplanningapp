<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    use HasFactory;

    public function mealPlanDetails() {
        return $this->hasMany(MealPlanDetail::class);
    }
    
    public function ingredients() {
        return $this->belongsToMany(Ingredient::class, 'meal_ingredients');
    }

}
