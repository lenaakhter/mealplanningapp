<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingList extends Model
{
    public function mealPlan()
    {
        return $this->belongsTo(MealPlan::class);
    }

    public function ingredient()
    {
        return $this->belongsTo(Ingredient::class);
    }
}
