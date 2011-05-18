<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Identifies amount and units for quantity of hazardous commodities.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_HazardousCommodityQuantityDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Number of units of the type below.
     *
     * @param decimal $Amount
     * return FedEx_ShipService_HazardousCommodityQuantityDetail
     */
    public function setAmount($amount)
    {
        $this->Amount = $amount;
        return $this;
    }
    
    /**
     * Units by which the hazardous commodity is measured.
     *
     * @param string $Units
     * return FedEx_ShipService_HazardousCommodityQuantityDetail
     */
    public function setUnits($units)
    {
        $this->Units = $units;
        return $this;
    }
    

    
}