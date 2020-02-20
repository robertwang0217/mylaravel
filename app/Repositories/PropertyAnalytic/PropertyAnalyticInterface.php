<?php 
namespace App\Repositories\PropertyAnalytic;

interface PropertyAnalyticInterface
{
    public function getSummaryByTypeAndValue( $type, $value );
}
