<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Documents the kind and quantity of an individual hazardous commodity in a package.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_ValidatedHazardousCommodityContent
    extends FedEx_AbstractComplexType
{

    /**
     * Identifies and describes an individual hazardous commodity.
     *
     * @param ValidatedHazardousCommodityDescription $Description
     * return FedEx_ShipService_ValidatedHazardousCommodityContent
     */
    public function setDescription(FedEx_ShipService_ValidatedHazardousCommodityDescription $description)
    {
        $this->Description = $description;
        return $this;
    }
    
    /**
     * Specifies the amount of the commodity in alternate units.
     *
     * @param HazardousCommodityQuantityDetail $Quantity
     * return FedEx_ShipService_ValidatedHazardousCommodityContent
     */
    public function setQuantity(FedEx_ShipService_HazardousCommodityQuantityDetail $quantity)
    {
        $this->Quantity = $quantity;
        return $this;
    }
    
    /**
     * Customer-provided specifications for handling individual commodities.
     *
     * @param HazardousCommodityOptionDetail $Options
     * return FedEx_ShipService_ValidatedHazardousCommodityContent
     */
    public function setOptions(FedEx_ShipService_HazardousCommodityOptionDetail $options)
    {
        $this->Options = $options;
        return $this;
    }
    

    
}