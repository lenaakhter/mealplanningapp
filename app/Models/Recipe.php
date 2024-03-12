<?php

// app/Models/Recipe.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'meal_id',
        'name',
        'description',
        'instructions',
        // Add other recipe attributes here
    ];

    public function meal()
    {
        return $this->belongsTo(Meal::class);
    }

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class, 'recipe_ingredients')
                    ->withPivot('quantity');
    }
}

