<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Plans extends Model
{
    use HasFactory;

    /**
     * Get the washing_plans associated with the Plans
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function washing_plans(): HasOne
    {
        return $this->hasOne(WashingPlans::class, 'plan_id');
    }
}
