<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PropertyAnalyticRepositoryTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCalculate()
    {
    	$results = [ 1, 1, 0, 0 ];

    	$this->control = app()->make( \App\Repositories\PropertyAnalytic\PropertyAnalyticRepository::class );

    	$results = $this->control->calculate( $results, 2 );

    	$expect = array (
			  'min' => 0,
			  'max' => 1,
			  'median' => 0.5,
			  'emptyPercent' => 50,
			  'valuePercent' => 50,
		);

        $this->assertEquals($expect, $results);
    }
}
