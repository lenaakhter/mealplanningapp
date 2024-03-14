<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MealPlanDetail extends Model
{
    use HasFactory;

    public function mealPlan() {
        return $this->belongsTo(MealPlan::class, 'plan_id');
    }
    
    public function meal() {
        return $this->belongsTo(Meal::class);
    }
    
}
