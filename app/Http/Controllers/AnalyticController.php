<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;

class AnalyticController extends Controller
{
 	// Add/Update an analytic to a property
 	public function attachToProperty( Request $request, $propertyId ) {
 		
 		$analytic = Models\AnalyticType::updateOrCreate( $request->all() );

 		if( !$analytic->id ) {
 			return response()->json([
 			    'success'  => false,
 			    'message' => 'Fail to attach'
 			], 422);
 		}

 		$analytic->properties()->syncWithoutDetaching( $propertyId );

 		return response()->json([
 		    'success'  => true,
 		    'data' => $analytic
 		]);
 	}

 	// Get all analytics for an inputted property
 	public function getAnalyticsByPropertyId( $propertyId ) {

 		$property = Models\Property::find( $propertyId );

 		$analytics = $property->analyticTypes()->get();

 		if( $property->analyticTypes()->first() == null ) {
 			return response()->json([
 			    'success'  => false,
 			    'message' => 'No analytics'
 			], 422);
 		}

 		return response()->json([
 		    'success'  => true,
 		    'data' => $analytics
 		]);
 	}
}
