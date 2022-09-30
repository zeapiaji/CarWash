<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subsidiary extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
    ];

    /**
     * Get the user that owns the Subsidiary
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function staff()
    {
        return $this->hasOne(Staff::class);
    }
}
