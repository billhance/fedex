<?php defined('SYSPATH') or die('No direct script access.');

/**
 * This class describes the pickup characteristics of a shipment (e.g. for use in a tag request).
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_PickupDetail
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param dateTime $ReadyDateTime
     * return FedEx_ShipService_PickupDetail
     */
    public function setReadyDateTime($readyDateTime)
    {
        $this->ReadyDateTime = $readyDateTime;
        return $this;
    }
    
    /**
     * 
     *
     * @param dateTime $LatestPickupDateTime
     * return FedEx_ShipService_PickupDetail
     */
    public function setLatestPickupDateTime($latestPickupDateTime)
    {
        $this->LatestPickupDateTime = $latestPickupDateTime;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $CourierInstructions
     * return FedEx_ShipService_PickupDetail
     */
    public function setCourierInstructions($courierInstructions)
    {
        $this->CourierInstructions = $courierInstructions;
        return $this;
    }
    
    /**
     * Identifies the type of Pickup request
     *
     * @param PickupRequestType $RequestType
     * return FedEx_ShipService_PickupDetail
     */
    public function setRequestType(FedEx_ShipService_PickupRequestType $requestType)
    {
        $this->RequestType = $requestType;
        return $this;
    }
    
    /**
     * Identifies the type of source for Pickup request
     *
     * @param PickupRequestSourceType $RequestSource
     * return FedEx_ShipService_PickupDetail
     */
    public function setRequestSource(FedEx_ShipService_PickupRequestSourceType $requestSource)
    {
        $this->RequestSource = $requestSource;
        return $this;
    }
    

    
}