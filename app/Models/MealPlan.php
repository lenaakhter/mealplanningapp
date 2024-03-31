<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MealPlan extends Model
{
    protected $table='meal_plans';
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function mealTimes()
    {
        return $this->hasMany(MealTime::class);
    }

    public function shoppingLists()
    {
        return $this->hasMany(ShoppingList::class);
    }

    public function recipes(){
        return $this->belongsTo(MealPlan::class);
    }

}
