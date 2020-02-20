<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PropertyAnalytic\PropertyAnalyticInterface;

class PropertyAnalyticController extends Controller
{
	public function __construct( PropertyAnalyticInterface $propertyAnalytic )
	{
	    $this->propertyAnalytic = $propertyAnalytic;
	}
    
    // Get a summary of all property analytics for an inputted suburb/state/country
    public function getPropertyAnalyticSummary( $type, $value ) {

    	$results = $this->propertyAnalytic->getSummaryByTypeAndValue( $type, $value );
    	
    	if( is_string($results) ) {
    		return response()->json([
    		    'success'  => false,
    		    'message' => $results
    		], 422);
    	}
    	return response()->json( $results );
    }
}
