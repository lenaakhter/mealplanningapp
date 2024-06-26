<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    protected $table='meals';
    public function mealTime()
    {
        return $this->belongsTo(MealTime::class);
    }

    public function recipes()
    {
        return $this->hasMany(Recipe::class);
    }
}
