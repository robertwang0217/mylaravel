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

 		$analytic->properties()->attach( $propertyId );

 		return response()->json([
 		    'success'  => true,
 		    'data' => $analytic
 		]);
 	}   
}
