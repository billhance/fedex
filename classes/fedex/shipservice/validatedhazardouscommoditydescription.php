<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Identifies and describes an individual hazardous commodity. For 201001 load, this is based on data from the FedEx Ground Hazardous Materials Shipping Guide.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_ValidatedHazardousCommodityDescription
    extends FedEx_AbstractComplexType
{

    /**
     * Regulatory identifier for a commodity (e.g. "UN ID" value).
     *
     * @param string $Id
     * return FedEx_ShipService_ValidatedHazardousCommodityDescription
     */
    public function setId($id)
    {
        $this->Id = $id;
        return $this;
    }
    
    /**
     * 
     *
     * @param HazardousCommodityPackingGroupType $PackingGroup
     * return FedEx_ShipService_ValidatedHazardousCommodityDescription
     */
    public function setPackingGroup(FedEx_ShipService_HazardousCommodityPackingGroupType $packingGroup)
    {
        $this->PackingGroup = $packingGroup;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $ProperShippingName
     * return FedEx_ShipService_ValidatedHazardousCommodityDescription
     */
    public function setProperShippingName($properShippingName)
    {
        $this->ProperShippingName = $properShippingName;
        return $this;
    }
    
    /**
     * Fully-expanded descriptive text for a hazardous commodity.
     *
     * @param string $ProperShippingNameAndDescription
     * return FedEx_ShipService_ValidatedHazardousCommodityDescription
     */
    public function setProperShippingNameAndDescription($properShippingNameAndDescription)
    {
        $this->ProperShippingNameAndDescription = $properShippingNameAndDescription;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $TechnicalName
     * return FedEx_ShipService_ValidatedHazardousCommodityDescription
     */
    public function setTechnicalName($technicalName)
    {
        $this->TechnicalName = $technicalName;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $HazardClass
     * return FedEx_ShipService_ValidatedHazardousCommodityDescription
     */
    public function setHazardClass($hazardClass)
    {
        $this->HazardClass = $hazardClass;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[string] $SubsidiaryClasses
     * return FedEx_ShipService_ValidatedHazardousCommodityDescription
     */
    public function setSubsidiaryClasses(array $subsidiaryClasses)
    {
        $this->SubsidiaryClasses = $subsidiaryClasses;
        return $this;
    }
    
    /**
     * Coded indications for special requirements or constraints.
     *
     * @param string $Symbols
     * return FedEx_ShipService_ValidatedHazardousCommodityDescription
     */
    public function setSymbols($symbols)
    {
        $this->Symbols = $symbols;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $LabelText
     * return FedEx_ShipService_ValidatedHazardousCommodityDescription
     */
    public function setLabelText($labelText)
    {
        $this->LabelText = $labelText;
        return $this;
    }
    

    
}