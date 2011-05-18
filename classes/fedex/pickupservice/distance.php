<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Driving or other transportation distances, distinct from dimension measurements.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PickupService_Distance
    extends FedEx_AbstractComplexType
{

    /**
     * Identifies the distance quantity.
     *
     * @param decimal $Value
     * return FedEx_PickupService_Distance
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    
    /**
     * Identifies the unit of measure for the distance value.
     *
     * @param DistanceUnits $Units
     * return FedEx_PickupService_Distance
     */
    public function setUnits(FedEx_PickupService_DistanceUnits $units)
    {
        $this->Units = $units;
        return $this;
    }
    

    
}