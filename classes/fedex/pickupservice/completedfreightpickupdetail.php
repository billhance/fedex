<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Data resulting from the processing of an LTL Freight pickup request.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PickupService_CompletedFreightPickupDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Describes the origin service center handling the pickup.
     *
     * @param FreightServiceCenterDetail $Origin
     * return FedEx_PickupService_CompletedFreightPickupDetail
     */
    public function setOrigin(FedEx_PickupService_FreightServiceCenterDetail $origin)
    {
        $this->Origin = $origin;
        return $this;
    }
    
    /**
     * Describes the results for each line item in the original request.
     *
     * @param array[CompletedFreightPickupLineItem] $LineItems
     * return FedEx_PickupService_CompletedFreightPickupDetail
     */
    public function setLineItems(array $lineItems)
    {
        $this->LineItems = $lineItems;
        return $this;
    }
    
    /**
     * Total number of pieces from all line items from request.
     *
     * @param nonNegativeInteger $TotalPieces
     * return FedEx_PickupService_CompletedFreightPickupDetail
     */
    public function setTotalPieces($totalPieces)
    {
        $this->TotalPieces = $totalPieces;
        return $this;
    }
    
    /**
     * Total weight from all line items from request.
     *
     * @param Weight $TotalWeight
     * return FedEx_PickupService_CompletedFreightPickupDetail
     */
    public function setTotalWeight(FedEx_PickupService_Weight $totalWeight)
    {
        $this->TotalWeight = $totalWeight;
        return $this;
    }
    
    /**
     * Total handling units from all line items from request.
     *
     * @param nonNegativeInteger $TotalHandlingUnits
     * return FedEx_PickupService_CompletedFreightPickupDetail
     */
    public function setTotalHandlingUnits($totalHandlingUnits)
    {
        $this->TotalHandlingUnits = $totalHandlingUnits;
        return $this;
    }
    
    /**
     * Resulting status of pickup.
     *
     * @param PickupEventType $Status
     * return FedEx_PickupService_CompletedFreightPickupDetail
     */
    public function setStatus(FedEx_PickupService_PickupEventType $status)
    {
        $this->Status = $status;
        return $this;
    }
    

    
}