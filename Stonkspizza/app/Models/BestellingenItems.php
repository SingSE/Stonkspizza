<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bestellingenitems extends Model
{
    use HasFactory;
    protected $table = 'bestellingen_items';

    protected $fillable = [
        'pizza_id',
        'order_id',
        'grootte_id'
    ];
    public $timestamps = false;

    public function size()
    {
        return $this->belongsTo(grootte::class);
    }

    public function order()
    {
        return $this->belongsTo(bestellingen::class);
    }

    public function pizza()
    {
        return $this->belongsTo(pizzas::class);
    }

}
