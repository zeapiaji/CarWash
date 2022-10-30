<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Plans extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
    ];

    /**
     * Get the washing_plans associated with the Plans
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function washing_plans(): HasMany
    {
        return $this->hasMany(WashingPlans::class, 'plan_id');
    }

    /**
     * Get the entry associated with the Plans
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function entry(): HasOne
    {
        return $this->hasOne(Entry::class);
    }
}
