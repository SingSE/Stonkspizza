<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medewerkers extends Model
{
    use HasFactory;

    protected $table = 'medewerkers';
    protected $guarded = [];

    public function orders()
    {
        return $this->hasMany(bestellingen::class);
    }
}
