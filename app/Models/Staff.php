<?php

namespace App\Models;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Venturecraft\Revisionable\RevisionableTrait;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Staff extends Model
{
    use HasFactory, HasRoles, SoftDeletes, RevisionableTrait;

    protected $fillable = [
        'user_id',
        'subsidiary_id',
    ];

    protected $guard_name = 'web';

    /**
     * Get the user associated with the Staff
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the user associated with the Staff
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function subsidiary()
    {
        return $this->belongsTo(Subsidiary::class, 'subsidiary_id');
    }

    /**
     * Get the transaction associated with the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function transaction(): HasOne
    {
        return $this->hasOne(Transaction::class, 'staff_id');
    }
}
