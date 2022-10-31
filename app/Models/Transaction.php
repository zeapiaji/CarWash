<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable =[
        'member_id',
        'staff_id',
        'plan_id',
        'doorsmeer_id',
        'subsidiary_id',
    ];


    /**
     * Get the user that owns the Transaction
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'member_id');
    }

    /**
     * Get the staff that owns the Transaction
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function staff(): BelongsTo
    {
        return $this->belongsTo(Staff::class, 'staff_id');
    }

    /**
     * Get the plan that owns the Transaction
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function plan(): BelongsTo
    {
        return $this->belongsTo(Plans::class, 'plan_id');
    }

    /**
     * Get the doorsmeer that owns the Transaction
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function doorsmeer(): BelongsTo
    {
        return $this->belongsTo(Doormeer::class, 'doorsmeer_id');
    }

    /**
     * Get the subsidiary_id that owns the Transaction
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subsidiary(): BelongsTo
    {
        return $this->belongsTo(Subsidiary::class, 'subsidiary_id');
    }
}
