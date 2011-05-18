<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The descriptive data for distance.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_LocatorService_Distance
    extends FedEx_AbstractComplexType
{

    /**
     * Identifies the value of distance from the point indicated by the search location (e.g. "12.5").
     *
     * @param decimal $Value
     * return FedEx_LocatorService_Distance
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    
    /**
     * Identifies the unit of distance from the point indicated by the search location (e.g. "MI"). See DistanceUnits for list of returned values.
     *
     * @param DistanceUnits $Units
     * return FedEx_LocatorService_Distance
     */
    public function setUnits(FedEx_LocatorService_DistanceUnits $units)
    {
        $this->Units = $units;
        return $this;
    }
    

    
}