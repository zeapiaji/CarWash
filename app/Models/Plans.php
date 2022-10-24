<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Plans extends Model
{
    use HasFactory;

    /**
     * Get the washing_plans associated with the Plans
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function washing_plans(): HasMany
    {
        return $this->hasMany(WashingPlans::class, 'plan_id');
    }
}
