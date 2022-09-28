<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Authenticatable
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'number_plate',
        'name',
        'type_id',
    ];

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
