<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_Measure
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param decimal $Quantity
     * return FedEx_RateService_Measure
     */
    public function setQuantity($quantity)
    {
        $this->Quantity = $quantity;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $Units
     * return FedEx_RateService_Measure
     */
    public function setUnits($units)
    {
        $this->Units = $units;
        return $this;
    }
    

    
}