<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Venturecraft\Revisionable\RevisionableTrait;

class Doormeer extends Model
{
    use HasFactory, RevisionableTrait;

    protected $fillable = [
        'name',
        'user_id',
        'subsidiary_id',
    ];


    /**
     * Get the user that owns the Doormeer
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the subsidiarythat owns the Doormeer
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subsidiary(): BelongsTo
    {
        return $this->belongsTo(Subsidiary::class);
    }
}
