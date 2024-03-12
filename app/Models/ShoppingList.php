<?php

// app/Models/ShoppingList.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingList extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        // Add other shopping list attributes here
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // If you have a many-to-many relationship between shopping lists and ingredients
    // public function ingredients()
    // {
    //     return $this->belongsToMany(Ingredient::class, 'shopping_list_ingredients')
    //                 ->withPivot('quantity');
    // }
}

