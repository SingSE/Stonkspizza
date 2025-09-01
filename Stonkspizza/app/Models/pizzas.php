<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pizzas extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'pizzas';
    protected $guarded = ['id'];

    public function ingredients()
    {
        return $this->belongsToMany(Ingredienten::class, "ingredienten_van_pizza", "pizza_id", "ingredient_id" );
    }

    public function price()
    {
        $price = 0;

        foreach ($this->ingredients as $ingredient) {
            $ingredientPrice = $ingredient->price * $ingredient->pivot->quantity;
            $price +=  $ingredientPrice;
        }

        return $price;
    }
}
