<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WashingPlans extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'plan_id',
    ];

    /**
     * Get the plans that owns the WashingPlans
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function plans(): BelongsTo
    {
        return $this->belongsTo(Plans::class, 'plan_id');
    }

    /**
     * Get the car_types that owns the WashingPlans
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function car_types(): BelongsTo
    {
        return $this->belongsTo(CarType::class);
    }
}
