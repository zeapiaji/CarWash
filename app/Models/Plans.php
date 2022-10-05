<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plans extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type_id',
        'harga',
        'fitur',
    ];

    protected $table = "plans";

    public function WashingPlans()
    {
        return $this->belongsTo('App\WashingPlans');
    }

    
}
