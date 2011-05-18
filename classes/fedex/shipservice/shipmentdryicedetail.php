<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Shipment-level totals of dry ice data across all packages.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_ShipmentDryIceDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Total number of packages in the shipment that contain dry ice.
     *
     * @param nonNegativeInteger $PackageCount
     * return FedEx_ShipService_ShipmentDryIceDetail
     */
    public function setPackageCount($packageCount)
    {
        $this->PackageCount = $packageCount;
        return $this;
    }
    
    /**
     * Total shipment dry ice weight for all packages.
     *
     * @param Weight $TotalWeight
     * return FedEx_ShipService_ShipmentDryIceDetail
     */
    public function setTotalWeight(FedEx_ShipService_Weight $totalWeight)
    {
        $this->TotalWeight = $totalWeight;
        return $this;
    }
    

    
}