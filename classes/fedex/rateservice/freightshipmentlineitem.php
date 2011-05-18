<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Description of an individual commodity or class of content in a shipment.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_FreightShipmentLineItem
    extends FedEx_AbstractComplexType
{

    /**
     * Freight class for this line item.
     *
     * @param FreightClassType $FreightClass
     * return FedEx_RateService_FreightShipmentLineItem
     */
    public function setFreightClass(FedEx_RateService_FreightClassType $freightClass)
    {
        $this->FreightClass = $freightClass;
        return $this;
    }
    
    /**
     * Specification of handling-unit packaging for this commodity or class line.
     *
     * @param PhysicalPackagingType $Packaging
     * return FedEx_RateService_FreightShipmentLineItem
     */
    public function setPackaging(FedEx_RateService_PhysicalPackagingType $packaging)
    {
        $this->Packaging = $packaging;
        return $this;
    }
    
    /**
     * Customer-provided description for this commodity or class line.
     *
     * @param string $Description
     * return FedEx_RateService_FreightShipmentLineItem
     */
    public function setDescription($description)
    {
        $this->Description = $description;
        return $this;
    }
    
    /**
     * Weight for this commodity or class line.
     *
     * @param Weight $Weight
     * return FedEx_RateService_FreightShipmentLineItem
     */
    public function setWeight(FedEx_RateService_Weight $weight)
    {
        $this->Weight = $weight;
        return $this;
    }
    
    /**
     * FED EX INTERNAL USE ONLY - Individual line item dimensions.
     *
     * @param Dimensions $Dimensions
     * return FedEx_RateService_FreightShipmentLineItem
     */
    public function setDimensions(FedEx_RateService_Dimensions $dimensions)
    {
        $this->Dimensions = $dimensions;
        return $this;
    }
    
    /**
     * Volume (cubic measure) for this commodity or class line.
     *
     * @param Volume $Volume
     * return FedEx_RateService_FreightShipmentLineItem
     */
    public function setVolume(FedEx_RateService_Volume $volume)
    {
        $this->Volume = $volume;
        return $this;
    }
    

    
}