<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_TrackService_TrackNotificationPackage
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param string $TrackingNumber
     * return FedEx_TrackService_TrackNotificationPackage
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->TrackingNumber = $trackingNumber;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $TrackingNumberUniqueIdentifiers
     * return FedEx_TrackService_TrackNotificationPackage
     */
    public function setTrackingNumberUniqueIdentifiers($trackingNumberUniqueIdentifiers)
    {
        $this->TrackingNumberUniqueIdentifiers = $trackingNumberUniqueIdentifiers;
        return $this;
    }
    
    /**
     * 
     *
     * @param CarrierCodeType $CarrierCode
     * return FedEx_TrackService_TrackNotificationPackage
     */
    public function setCarrierCode(FedEx_TrackService_CarrierCodeType $carrierCode)
    {
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    
    /**
     * 
     *
     * @param date $ShipDate
     * return FedEx_TrackService_TrackNotificationPackage
     */
    public function setShipDate($shipDate)
    {
        $this->ShipDate = $shipDate;
        return $this;
    }
    
    /**
     * 
     *
     * @param Address $Destination
     * return FedEx_TrackService_TrackNotificationPackage
     */
    public function setDestination(FedEx_TrackService_Address $destination)
    {
        $this->Destination = $destination;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[TrackNotificationRecipientDetail] $RecipientDetails
     * return FedEx_TrackService_TrackNotificationPackage
     */
    public function setRecipientDetails(array $recipientDetails)
    {
        $this->RecipientDetails = $recipientDetails;
        return $this;
    }
    

    
}