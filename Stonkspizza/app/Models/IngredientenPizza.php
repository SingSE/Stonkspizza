<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IngredientenPizza extends Model
{
    use HasFactory;

    protected $fillable = [
        'pizza_id',
        'ingredient_id',
    ];

    protected $table = "ingredienten_van_pizza";

    public function ingredient()
    {
        return $this->belongsTo(Ingredienten::class, 'ingredient_id');
    }
}
