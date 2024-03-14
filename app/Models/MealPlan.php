<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MealPlan extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class);
    }
    
    public function mealPlanDetails() {
        return $this->hasMany(MealPlanDetail::class);
    }
    
    public function shoppingList() {
        return $this->hasOne(ShoppingList::class);
    }
    
}
