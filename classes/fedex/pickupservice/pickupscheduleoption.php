<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The constraints on the scheduling of a dispatch, where that dispatch would be made by the Carrier, occur on the PickupDate,
						and would be scheduled (created by means of a CourierDispatchRequest) on a date related to the PickupDate as described
						by the "ScheduleDay" (SAME_DAY meaning that the creation would occur on the PickupDate, and FUTURE_DAY meaning that the creation
						would occur on a date prior to the PickupDate).
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PickupService_PickupScheduleOption
    extends FedEx_AbstractComplexType
{

    /**
     * the carrier to which this PickupScheduleOption applies
     *
     * @param CarrierCodeType $Carrier
     * return FedEx_PickupService_PickupScheduleOption
     */
    public function setCarrier(FedEx_PickupService_CarrierCodeType $carrier)
    {
        $this->Carrier = $carrier;
        return $this;
    }
    
    /**
     * Descriptive information about the shipment.
     *
     * @param string $Description
     * return FedEx_PickupService_PickupScheduleOption
     */
    public function setDescription($description)
    {
        $this->Description = $description;
        return $this;
    }
    
    /**
     * Tells whether this option describes a dispatch created on the dispatch date (SAME_DAY), or on a prior date (FUTURE_DAY)
     *
     * @param PickupRequestType $ScheduleDay
     * return FedEx_PickupService_PickupScheduleOption
     */
    public function setScheduleDay(FedEx_PickupService_PickupRequestType $scheduleDay)
    {
        $this->ScheduleDay = $scheduleDay;
        return $this;
    }
    
    /**
     * True if this pickup option is available.
     *
     * @param boolean $Available
     * return FedEx_PickupService_PickupScheduleOption
     */
    public function setAvailable($available)
    {
        $this->Available = $available;
        return $this;
    }
    
    /**
     * Identifies the date (in the postal code's time zone) to which this PickupScheduleOption refers.
     *
     * @param date $PickupDate
     * return FedEx_PickupService_PickupScheduleOption
     */
    public function setPickupDate($pickupDate)
    {
        $this->PickupDate = $pickupDate;
        return $this;
    }
    
    /**
     * Identifies the latest allowed ready time (in the postal code's time zone) for a postal code. As a local time, it will not include a Time Zone Designator
     *
     * @param time $CutOffTime
     * return FedEx_PickupService_PickupScheduleOption
     */
    public function setCutOffTime($cutOffTime)
    {
        $this->CutOffTime = $cutOffTime;
        return $this;
    }
    
    /**
     * Identifies the minimum required length of the window of time between the ReadyTime and the CustomerCloseTime.
     *
     * @param duration $AccessTime
     * return FedEx_PickupService_PickupScheduleOption
     */
    public function setAccessTime($accessTime)
    {
        $this->AccessTime = $accessTime;
        return $this;
    }
    
    /**
     * Indicates whether residential pickup is available for the requested postal code.
     *
     * @param boolean $ResidentialAvailable
     * return FedEx_PickupService_PickupScheduleOption
     */
    public function setResidentialAvailable($residentialAvailable)
    {
        $this->ResidentialAvailable = $residentialAvailable;
        return $this;
    }
    

    
}