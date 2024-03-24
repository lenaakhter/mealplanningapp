<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MealTime extends Model
{
    public function mealPlan()
    {
        return $this->belongsTo(MealPlan::class);
    }

    public function meals()
    {
        return $this->hasMany(Meal::class);
    }
}
