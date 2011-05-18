<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The dimensions of this package and the unit type used for the measurements.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_Dimensions
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param nonNegativeInteger $Length
     * return FedEx_ShipService_Dimensions
     */
    public function setLength($length)
    {
        $this->Length = $length;
        return $this;
    }
    
    /**
     * 
     *
     * @param nonNegativeInteger $Width
     * return FedEx_ShipService_Dimensions
     */
    public function setWidth($width)
    {
        $this->Width = $width;
        return $this;
    }
    
    /**
     * 
     *
     * @param nonNegativeInteger $Height
     * return FedEx_ShipService_Dimensions
     */
    public function setHeight($height)
    {
        $this->Height = $height;
        return $this;
    }
    
    /**
     * 
     *
     * @param LinearUnits $Units
     * return FedEx_ShipService_Dimensions
     */
    public function setUnits(FedEx_ShipService_LinearUnits $units)
    {
        $this->Units = $units;
        return $this;
    }
    

    
}