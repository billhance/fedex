<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Identifies number and type of packaging units for hazardous commodities.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_HazardousCommodityPackagingDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Number of units of the type below.
     *
     * @param nonNegativeInteger $Count
     * return FedEx_ShipService_HazardousCommodityPackagingDetail
     */
    public function setCount($count)
    {
        $this->Count = $count;
        return $this;
    }
    
    /**
     * Units in which the hazardous commodity is packaged.
     *
     * @param string $Units
     * return FedEx_ShipService_HazardousCommodityPackagingDetail
     */
    public function setUnits($units)
    {
        $this->Units = $units;
        return $this;
    }
    

    
}