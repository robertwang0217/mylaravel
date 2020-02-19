<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnalyticType extends Model
{
	protected $table = 'analytic_types';

    protected $fillable = [
        'name', 'units', 'is_numeric', 'num_decimal_places'
    ];

    public function properties()
    {
        return $this->belongsToMany(Company::class, 'property_analytics');
    }
}
