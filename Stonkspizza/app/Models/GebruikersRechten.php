<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GebruikersRechten extends Model
{
    use HasFactory;
    protected $table = 'gebruikers_rechten';
    protected $fillable = [
        'user_id',
        'role_id'
    ];
}
