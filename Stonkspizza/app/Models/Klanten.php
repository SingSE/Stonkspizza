<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klanten extends Model
{
    use HasFactory;

    protected $table = 'klant';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
