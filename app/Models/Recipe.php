<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{

     //This was made to show which table the data should be taken from for the products and their details.
    protected $table='recipes';
    public function meal()
    {
        return $this->belongsTo(Meal::class);
    }

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class, 'recipe_ingredients')
                    ->withPivot('quantity', 'measurement_unit');
    }

        //to stop updated_at and created_at from showing up as we are not using for this table.
        public $timestamps = false;

}
