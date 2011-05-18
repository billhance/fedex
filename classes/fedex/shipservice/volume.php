<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Three-dimensional volume/cubic measurement.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_Volume
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param VolumeUnits $Units
     * return FedEx_ShipService_Volume
     */
    public function setUnits(FedEx_ShipService_VolumeUnits $units)
    {
        $this->Units = $units;
        return $this;
    }
    
    /**
     * 
     *
     * @param decimal $Value
     * return FedEx_ShipService_Volume
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    

    
}