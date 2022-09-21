<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'number_plate',
        'type',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
