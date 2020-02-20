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
        // Simple unit test sample
        $this->control = app()->make( \App\Repositories\PropertyAnalytic\PropertyAnalyticRepository::class );

    	$input = [ 5, 10, 0, 0 ];

    	$results = $this->control->calculate( $input, 2 );

    	$expect = array (
			  'min' => 0,
			  'max' => 10,
			  'median' => 3.75,
			  'emptyPercent' => 50,
			  'valuePercent' => 50,
		);
        $this->assertEquals($expect, $results);

        $input = [ 10, 20, 0, 0 ];

        $results = $this->control->calculate( $input, 2 );

        $expect = array (
              'min' => 0,
              'max' => 20,
              'median' => 7.5,
              'emptyPercent' => 50,
              'valuePercent' => 50,
        );
        $this->assertEquals($expect, $results);
    }
}
