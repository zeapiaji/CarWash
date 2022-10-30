<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Car extends Authenticatable
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'number_plate',
        'name',
        'type_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the user associated with the Car
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function car_type()
    {
        return $this->belongsTo(CarType::class);
    }
}
