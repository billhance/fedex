<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The descriptive data that defines the extent of space between two objects or places.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_TrackService_Distance
    extends FedEx_AbstractComplexType
{

    /**
     * Identifies the distance quantity.
     *
     * @param decimal $Value
     * return FedEx_TrackService_Distance
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
     * return FedEx_TrackService_Distance
     */
    public function setUnits(FedEx_TrackService_DistanceUnits $units)
    {
        $this->Units = $units;
        return $this;
    }
    

    
}