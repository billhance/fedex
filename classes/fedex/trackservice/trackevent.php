<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Holds FedEx scanning information about a package.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_TrackService_TrackEvent
    extends FedEx_AbstractComplexType
{

    /**
     * The time the event happened.
     *
     * @param dateTime $Timestamp
     * return FedEx_TrackService_TrackEvent
     */
    public function setTimestamp($timestamp)
    {
        $this->Timestamp = $timestamp;
        return $this;
    }
    
    /**
     * Carrier’s scan code. Pairs with EventDescription.
     *
     * @param string $EventType
     * return FedEx_TrackService_TrackEvent
     */
    public function setEventType($eventType)
    {
        $this->EventType = $eventType;
        return $this;
    }
    
    /**
     * Literal description of the Scan activity.
     *
     * @param string $EventDescription
     * return FedEx_TrackService_TrackEvent
     */
    public function setEventDescription($eventDescription)
    {
        $this->EventDescription = $eventDescription;
        return $this;
    }
    
    /**
     * Further defines the Scan Type code’s specific type (e.g., DEX08 business closed). Pairs with StatusExceptionDescription.
     *
     * @param string $StatusExceptionCode
     * return FedEx_TrackService_TrackEvent
     */
    public function setStatusExceptionCode($statusExceptionCode)
    {
        $this->StatusExceptionCode = $statusExceptionCode;
        return $this;
    }
    
    /**
     * Literal description that pairs with the StatusExceptionCode.
     *
     * @param string $StatusExceptionDescription
     * return FedEx_TrackService_TrackEvent
     */
    public function setStatusExceptionDescription($statusExceptionDescription)
    {
        $this->StatusExceptionDescription = $statusExceptionDescription;
        return $this;
    }
    
    /**
     * Address information of the station that is responsible for the scan.
     *
     * @param Address $Address
     * return FedEx_TrackService_TrackEvent
     */
    public function setAddress(FedEx_TrackService_Address $address)
    {
        $this->Address = $address;
        return $this;
    }
    
    /**
     * Not available at this time.
     *
     * @param ArrivalLocationType $ArrivalLocation
     * return FedEx_TrackService_TrackEvent
     */
    public function setArrivalLocation(FedEx_TrackService_ArrivalLocationType $arrivalLocation)
    {
        $this->ArrivalLocation = $arrivalLocation;
        return $this;
    }
    

    
}