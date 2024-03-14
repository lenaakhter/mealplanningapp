<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingList extends Model
{
    use HasFactory;

    public function mealPlan() {
        return $this->belongsTo(MealPlan::class, 'plan_id');
    }
    
    public function details() {
        return $this->hasMany(ShoppingListDetail::class);
    }
    
}
