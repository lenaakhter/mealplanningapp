<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingListDetail extends Model
{
    use HasFactory;

    public function shoppingList() {
        return $this->belongsTo(ShoppingList::class);
    }
    
    public function ingredient() {
        return $this->belongsTo(Ingredient::class);
    }
    
}
