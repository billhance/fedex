<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Descriptive information about the shipment.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PickupService_PickupShipmentAttributes
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param ServiceType $ServiceType
     * return FedEx_PickupService_PickupShipmentAttributes
     */
    public function setServiceType(FedEx_PickupService_ServiceType $serviceType)
    {
        $this->ServiceType = $serviceType;
        return $this;
    }
    
    /**
     * Descriptive information about the dimensions of the package.
     *
     * @param Dimensions $Dimensions
     * return FedEx_PickupService_PickupShipmentAttributes
     */
    public function setDimensions(FedEx_PickupService_Dimensions $dimensions)
    {
        $this->Dimensions = $dimensions;
        return $this;
    }
    
    /**
     * Descriptive information about the weight of the package.
     *
     * @param Weight $Weight
     * return FedEx_PickupService_PickupShipmentAttributes
     */
    public function setWeight(FedEx_PickupService_Weight $weight)
    {
        $this->Weight = $weight;
        return $this;
    }
    

    
}