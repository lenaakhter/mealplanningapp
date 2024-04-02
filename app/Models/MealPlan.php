<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MealPlan extends Model
{
    protected $table = 'meal_plans';

    protected $primaryKey = 'mealPlanID';

    public $timestamps = false;

    protected $fillable = ['userID', 'recipeID', 'total'];

    // protected $fillable = ['user_id', 'products', 'completed'];

    // protected $casts = ['products' => 'array'];

    use HasFactory;


}
