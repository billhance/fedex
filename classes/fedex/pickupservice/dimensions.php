<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Descriptive data detailing the length, width, and height of a package.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PickupService_Dimensions
    extends FedEx_AbstractComplexType
{

    /**
     * Identifies the length of the package.
     *
     * @param nonNegativeInteger $Length
     * return FedEx_PickupService_Dimensions
     */
    public function setLength($length)
    {
        $this->Length = $length;
        return $this;
    }
    
    /**
     * Identifies the width of the package.
     *
     * @param nonNegativeInteger $Width
     * return FedEx_PickupService_Dimensions
     */
    public function setWidth($width)
    {
        $this->Width = $width;
        return $this;
    }
    
    /**
     * Identifies the height of the package.
     *
     * @param nonNegativeInteger $Height
     * return FedEx_PickupService_Dimensions
     */
    public function setHeight($height)
    {
        $this->Height = $height;
        return $this;
    }
    
    /**
     * Identifies the unit of measure associated with a dimensional values. See LinearUnits for valid values.
     *
     * @param LinearUnits $Units
     * return FedEx_PickupService_Dimensions
     */
    public function setUnits(FedEx_PickupService_LinearUnits $units)
    {
        $this->Units = $units;
        return $this;
    }
    

    
}