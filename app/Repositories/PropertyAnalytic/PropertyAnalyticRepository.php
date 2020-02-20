<?php

namespace App\Repositories\PropertyAnalytic;

use App\Models;
use Illuminate\Support\Facades\Schema;

/**
 * Class AnalyticRepository.
 */
class PropertyAnalyticRepository implements PropertyAnalyticInterface
{
    public function getSummaryByTypeAndValue( $type, $value )
    {
    	if ( !Schema::hasColumn('properties', $type) ) {
    	    return 'No properties';
    	}

    	$properties = Models\Property::where( $type, $value )->get();
    	
        if( count($properties) == 0 ) {
        	return 'No properties';
        }

        $results = [];
        $emptyCounts = 0;
        foreach( $properties as $property ) {
        	$numbers = [];
        	$propertyAnalytics = $property->propertyAnalytics()->get();

        	foreach( $propertyAnalytics as $each ) {
        		if( !$each->value ) {
        			array_push( $numbers, 0 );
        			// Count the record with empty value
        			$emptyCounts = $emptyCounts + 1;
        		}
        		else{
        			array_push( $numbers, $each->value );
        		}
        	}
        	$results = array_merge( $results, $numbers );
        }

        $min = min( $results );
        $max = max( $results );
        $counts = count( $results );
        $avg = array_sum( $results ) / $counts;
        $emptyPercent = $emptyCounts * 100 / $counts;
        $valuePercent = ( $counts - $emptyCounts ) * 100 / $counts;

        return [
        	'success' => true,
        	'data' => [
        		'min' => $min,
        		'max' => $max,
        		'median' => $avg,
        		'emptyPercent' => $emptyPercent,
        		'valuePercent' => $valuePercent
        	]
        ];
    }
}
