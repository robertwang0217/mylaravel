<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;

class PropertyController extends Controller
{
    public function create( Request $request ) {

    	$property = Models\Property::create( $request->all() );

    	if( !$property->id ) {
    		return response()->json([
    		    'success'  => false,
    		    'message' => 'Fail to create'
    		], 422);
    	}

    	return response()->json([
    	    'success'  => true,
    	    'data' => $property
    	]);
    }
}
