<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Identifies details about the contents of the shipment to be picked up.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PickupService_FreightPickupLineItem
    extends FedEx_AbstractComplexType
{

    /**
     * Identifies the line item, to match reply line with request line.
     *
     * @param int $SequenceNumber
     * return FedEx_PickupService_FreightPickupLineItem
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->SequenceNumber = $sequenceNumber;
        return $this;
    }
    
    /**
     * Identifies the destination of the shipment.
     *
     * @param Address $Destination
     * return FedEx_PickupService_FreightPickupLineItem
     */
    public function setDestination(FedEx_PickupService_Address $destination)
    {
        $this->Destination = $destination;
        return $this;
    }
    
    /**
     * Identifies the physical packaging of the shipment.
     *
     * @param PhysicalPackagingType $Packaging
     * return FedEx_PickupService_FreightPickupLineItem
     */
    public function setPackaging(FedEx_PickupService_PhysicalPackagingType $packaging)
    {
        $this->Packaging = $packaging;
        return $this;
    }
    
    /**
     * Identifies number of items contained in the packaging.
     *
     * @param int $Pieces
     * return FedEx_PickupService_FreightPickupLineItem
     */
    public function setPieces($pieces)
    {
        $this->Pieces = $pieces;
        return $this;
    }
    
    /**
     * Identifies the total weight of the item being tendered to FedEx for this pickup request.
     *
     * @param Weight $Weight
     * return FedEx_PickupService_FreightPickupLineItem
     */
    public function setWeight(FedEx_PickupService_Weight $weight)
    {
        $this->Weight = $weight;
        return $this;
    }
    
    /**
     * Identifies number of items to be moved.
     *
     * @param int $TotalHandlingUnits
     * return FedEx_PickupService_FreightPickupLineItem
     */
    public function setTotalHandlingUnits($totalHandlingUnits)
    {
        $this->TotalHandlingUnits = $totalHandlingUnits;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $PurchaseOrderNumber
     * return FedEx_PickupService_FreightPickupLineItem
     */
    public function setPurchaseOrderNumber($purchaseOrderNumber)
    {
        $this->PurchaseOrderNumber = $purchaseOrderNumber;
        return $this;
    }
    
    /**
     * 
     *
     * @param boolean $JustOneMore
     * return FedEx_PickupService_FreightPickupLineItem
     */
    public function setJustOneMore($justOneMore)
    {
        $this->JustOneMore = $justOneMore;
        return $this;
    }
    
    /**
     * These special services are available at the shipment level for some or all service types. If the shipper is requesting a special service which requires additional data (such as the COD amount), the shipment special service type must be present in the specialServiceTypes collection, and the supporting detail must be provided in the appropriate sub-object below. 
     *
     * @param ShipmentSpecialServicesRequested $SpecialServicesRequested
     * return FedEx_PickupService_FreightPickupLineItem
     */
    public function setSpecialServicesRequested(FedEx_PickupService_ShipmentSpecialServicesRequested $specialServicesRequested)
    {
        $this->SpecialServicesRequested = $specialServicesRequested;
        return $this;
    }
    
    /**
     * Describes the contents of the package.
     *
     * @param string $Description
     * return FedEx_PickupService_FreightPickupLineItem
     */
    public function setDescription($description)
    {
        $this->Description = $description;
        return $this;
    }
    

    
}