<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CarType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];
    protected $table = 'car_types';

    /**
     * Get the user that owns the CarType
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    /**
     * Get the washing_plans associated with the CarType
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function washing_plans(): HasOne
    {
        return $this->hasOne(WashingPlans::class);
    }
}
