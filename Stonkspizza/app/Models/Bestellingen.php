<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bestellingen extends Model
{
    use HasFactory;
    protected $table = 'bestellingen';
    public $timestamps = false;

    protected $fillable = ['id'];

    public function orderitems()
    {
        return $this->hasMany(bestellingenitems::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

}
