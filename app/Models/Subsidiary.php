<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Venturecraft\Revisionable\RevisionableTrait;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subsidiary extends Model
{
    use HasFactory, SoftDeletes, RevisionableTrait;

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

    /**
     * Get all of the entries for the Subsidiary
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function entries(): HasMany
    {
        return $this->hasMany(Entry::class, 'subsidiary_id');
    }

    /**
     * Get all of the doorsmeer for the Subsidiary
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function doorsmeer(): HasMany
    {
        return $this->hasMany(Doormeer::class, 'doorsmeer_id');
    }

    /**
     * Get the transaction associated with the Subsidiary
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function transaction(): HasOne
    {
        return $this->hasOne(Transaction::class, 'doorsmeer_id');
    }
}
