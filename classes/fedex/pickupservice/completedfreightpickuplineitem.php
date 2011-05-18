<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Data resulting from the processing of an individual line item in a LTL Freight pickup request.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PickupService_CompletedFreightPickupLineItem
    extends FedEx_AbstractComplexType
{

    /**
     * Identifies the line item, to match reply line with request line.
     *
     * @param int $SequenceNumber
     * return FedEx_PickupService_CompletedFreightPickupLineItem
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->SequenceNumber = $sequenceNumber;
        return $this;
    }
    
    /**
     * Describes the destination service center handling the delivery of this line item.
     *
     * @param FreightServiceCenterDetail $Destination
     * return FedEx_PickupService_CompletedFreightPickupLineItem
     */
    public function setDestination(FedEx_PickupService_FreightServiceCenterDetail $destination)
    {
        $this->Destination = $destination;
        return $this;
    }
    
    /**
     * Total travel time for this line item.
     *
     * @param duration $TotalTravelTime
     * return FedEx_PickupService_CompletedFreightPickupLineItem
     */
    public function setTotalTravelTime($totalTravelTime)
    {
        $this->TotalTravelTime = $totalTravelTime;
        return $this;
    }
    
    /**
     * Identifies estimated delivery date and time for each line item.
     *
     * @param dateTime $EtaDeliveryTimestamp
     * return FedEx_PickupService_CompletedFreightPickupLineItem
     */
    public function setEtaDeliveryTimestamp($etaDeliveryTimestamp)
    {
        $this->EtaDeliveryTimestamp = $etaDeliveryTimestamp;
        return $this;
    }
    

    
}