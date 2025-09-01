<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class grootte extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'grootte';
    protected $fillable = [
        'name',
        'pricefactor'
    ];

    public function orderitems()
    {
        return $this->hasMany(bestellingenitems::class);
    }
}
