<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'guid', 'suburb', 'state', 'country'
    ];

    public function analyticTypes()
    {
        return $this->belongsToMany(AnalyticType::class, 'property_analytics', 'property_id');
    }
}
