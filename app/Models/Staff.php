<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;

class Staff extends Model
{
    use HasFactory, HasRoles, SoftDeletes;

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
        return $this->belongsTo(Subsidiary::class);
    }
}
