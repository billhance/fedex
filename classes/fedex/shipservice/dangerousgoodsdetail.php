<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The descriptive data required for a FedEx shipment containing dangerous goods (hazardous materials).
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_DangerousGoodsDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Identifies whether or not the products being shipped are required to be accessible during delivery.
     *
     * @param DangerousGoodsAccessibilityType $Accessibility
     * return FedEx_ShipService_DangerousGoodsDetail
     */
    public function setAccessibility(FedEx_ShipService_DangerousGoodsAccessibilityType $accessibility)
    {
        $this->Accessibility = $accessibility;
        return $this;
    }
    
    /**
     * Shipment is packaged/documented for movement ONLY on cargo aircraft.
     *
     * @param boolean $CargoAircraftOnly
     * return FedEx_ShipService_DangerousGoodsDetail
     */
    public function setCargoAircraftOnly($cargoAircraftOnly)
    {
        $this->CargoAircraftOnly = $cargoAircraftOnly;
        return $this;
    }
    
    /**
     * Indicates which kinds of hazardous content are in the current package.
     *
     * @param array[HazardousCommodityOptionType] $Options
     * return FedEx_ShipService_DangerousGoodsDetail
     */
    public function setOptions(array $options)
    {
        $this->Options = $options;
        return $this;
    }
    
    /**
     * Documents the kinds and quantities of all hazardous commodities in the current package.
     *
     * @param array[HazardousCommodityContent] $HazardousCommodities
     * return FedEx_ShipService_DangerousGoodsDetail
     */
    public function setHazardousCommodities(array $hazardousCommodities)
    {
        $this->HazardousCommodities = $hazardousCommodities;
        return $this;
    }
    
    /**
     * Description of the packaging of this commodity, suitable for use on OP-900 and OP-950 forms.
     *
     * @param HazardousCommodityPackagingDetail $Packaging
     * return FedEx_ShipService_DangerousGoodsDetail
     */
    public function setPackaging(FedEx_ShipService_HazardousCommodityPackagingDetail $packaging)
    {
        $this->Packaging = $packaging;
        return $this;
    }
    
    /**
     * Telephone number to use for contact in the event of an emergency.
     *
     * @param string $EmergencyContactNumber
     * return FedEx_ShipService_DangerousGoodsDetail
     */
    public function setEmergencyContactNumber($emergencyContactNumber)
    {
        $this->EmergencyContactNumber = $emergencyContactNumber;
        return $this;
    }
    
    /**
     * Offeror's name or contract number, per DOT regulation.
     *
     * @param string $Offeror
     * return FedEx_ShipService_DangerousGoodsDetail
     */
    public function setOfferor($offeror)
    {
        $this->Offeror = $offeror;
        return $this;
    }
    

    
}