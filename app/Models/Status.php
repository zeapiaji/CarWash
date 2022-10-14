<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Status extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    /**
     * Get the entry associated with the Status
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function entry(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
