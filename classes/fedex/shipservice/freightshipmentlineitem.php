<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Description of an individual commodity or class of content in a shipment.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_FreightShipmentLineItem
    extends FedEx_AbstractComplexType
{

    /**
     * Freight class for this line item.
     *
     * @param FreightClassType $FreightClass
     * return FedEx_ShipService_FreightShipmentLineItem
     */
    public function setFreightClass(FedEx_ShipService_FreightClassType $freightClass)
    {
        $this->FreightClass = $freightClass;
        return $this;
    }
    
    /**
     * FEDEX INTERNAL USE ONLY: for FedEx system that estimate freight class from customer-provided dimensions and weight.
     *
     * @param boolean $ClassProvidedByCustomer
     * return FedEx_ShipService_FreightShipmentLineItem
     */
    public function setClassProvidedByCustomer($classProvidedByCustomer)
    {
        $this->ClassProvidedByCustomer = $classProvidedByCustomer;
        return $this;
    }
    
    /**
     * Number of individual handling units to which this line applies. (NOTE: Total of line-item-level handling units may not balance to shipment-level total handling units.)
     *
     * @param nonNegativeInteger $HandlingUnits
     * return FedEx_ShipService_FreightShipmentLineItem
     */
    public function setHandlingUnits($handlingUnits)
    {
        $this->HandlingUnits = $handlingUnits;
        return $this;
    }
    
    /**
     * Specification of handling-unit packaging for this commodity or class line.
     *
     * @param PhysicalPackagingType $Packaging
     * return FedEx_ShipService_FreightShipmentLineItem
     */
    public function setPackaging(FedEx_ShipService_PhysicalPackagingType $packaging)
    {
        $this->Packaging = $packaging;
        return $this;
    }
    
    /**
     * Number of pieces for this commodity or class line.
     *
     * @param nonNegativeInteger $Pieces
     * return FedEx_ShipService_FreightShipmentLineItem
     */
    public function setPieces($pieces)
    {
        $this->Pieces = $pieces;
        return $this;
    }
    
    /**
     * NMFC Code for commodity.
     *
     * @param string $NmfcCode
     * return FedEx_ShipService_FreightShipmentLineItem
     */
    public function setNmfcCode($nmfcCode)
    {
        $this->NmfcCode = $nmfcCode;
        return $this;
    }
    
    /**
     * Indicates the kind of hazardous material content in this line item.
     *
     * @param HazardousCommodityOptionType $HazardousMaterials
     * return FedEx_ShipService_FreightShipmentLineItem
     */
    public function setHazardousMaterials(FedEx_ShipService_HazardousCommodityOptionType $hazardousMaterials)
    {
        $this->HazardousMaterials = $hazardousMaterials;
        return $this;
    }
    
    /**
     * For printed reference per line item.
     *
     * @param string $BillOfLadingNumber
     * return FedEx_ShipService_FreightShipmentLineItem
     */
    public function setBillOfLadingNumber($billOfLadingNumber)
    {
        $this->BillOfLadingNumber = $billOfLadingNumber;
        return $this;
    }
    
    /**
     * For printed reference per line item.
     *
     * @param string $PurchaseOrderNumber
     * return FedEx_ShipService_FreightShipmentLineItem
     */
    public function setPurchaseOrderNumber($purchaseOrderNumber)
    {
        $this->PurchaseOrderNumber = $purchaseOrderNumber;
        return $this;
    }
    
    /**
     * Customer-provided description for this commodity or class line.
     *
     * @param string $Description
     * return FedEx_ShipService_FreightShipmentLineItem
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
     * return FedEx_ShipService_FreightShipmentLineItem
     */
    public function setWeight(FedEx_ShipService_Weight $weight)
    {
        $this->Weight = $weight;
        return $this;
    }
    
    /**
     * FED EX INTERNAL USE ONLY - Individual line item dimensions.
     *
     * @param Dimensions $Dimensions
     * return FedEx_ShipService_FreightShipmentLineItem
     */
    public function setDimensions(FedEx_ShipService_Dimensions $dimensions)
    {
        $this->Dimensions = $dimensions;
        return $this;
    }
    
    /**
     * Volume (cubic measure) for this commodity or class line.
     *
     * @param Volume $Volume
     * return FedEx_ShipService_FreightShipmentLineItem
     */
    public function setVolume(FedEx_ShipService_Volume $volume)
    {
        $this->Volume = $volume;
        return $this;
    }
    

    
}