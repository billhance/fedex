<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Documents the kind and quantity of an individual hazardous commodity in a package.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_HazardousCommodityContent
    extends FedEx_AbstractComplexType
{

    /**
     * Identifies and describes an individual hazardous commodity.
     *
     * @param HazardousCommodityDescription $Description
     * return FedEx_RateService_HazardousCommodityContent
     */
    public function setDescription(FedEx_RateService_HazardousCommodityDescription $description)
    {
        $this->Description = $description;
        return $this;
    }
    
    /**
     * Specifies the amount of the commodity in alternate units.
     *
     * @param HazardousCommodityQuantityDetail $Quantity
     * return FedEx_RateService_HazardousCommodityContent
     */
    public function setQuantity(FedEx_RateService_HazardousCommodityQuantityDetail $quantity)
    {
        $this->Quantity = $quantity;
        return $this;
    }
    
    /**
     * Customer-provided specifications for handling individual commodities.
     *
     * @param HazardousCommodityOptionDetail $Options
     * return FedEx_RateService_HazardousCommodityContent
     */
    public function setOptions(FedEx_RateService_HazardousCommodityOptionDetail $options)
    {
        $this->Options = $options;
        return $this;
    }
    

    
}