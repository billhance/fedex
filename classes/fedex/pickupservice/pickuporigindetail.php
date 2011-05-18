<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Descriptive data about the origin of the shipment being picked up by FedEx.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PickupService_PickupOriginDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Flag identifies if customer wants to use Account address or send and alternate address for pickup.
     *
     * @param boolean $UseAccountAddress
     * return FedEx_PickupService_PickupOriginDetail
     */
    public function setUseAccountAddress($useAccountAddress)
    {
        $this->UseAccountAddress = $useAccountAddress;
        return $this;
    }
    
    /**
     * Descriptive data about the physical location of the package being picked up by FedEx.
     *
     * @param ContactAndAddress $PickupLocation
     * return FedEx_PickupService_PickupOriginDetail
     */
    public function setPickupLocation(FedEx_PickupService_ContactAndAddress $pickupLocation)
    {
        $this->PickupLocation = $pickupLocation;
        return $this;
    }
    
    /**
     * Identifies the physical location where the courier should pick up the shipment. See CourierDispatchBuildingLocationType for valid values.
     *
     * @param PickupBuildingLocationType $PackageLocation
     * return FedEx_PickupService_PickupOriginDetail
     */
    public function setPackageLocation(FedEx_PickupService_PickupBuildingLocationType $packageLocation)
    {
        $this->PackageLocation = $packageLocation;
        return $this;
    }
    
    /**
     * 
     *
     * @param BuildingPartCode $BuildingPart
     * return FedEx_PickupService_PickupOriginDetail
     */
    public function setBuildingPart(FedEx_PickupService_BuildingPartCode $buildingPart)
    {
        $this->BuildingPart = $buildingPart;
        return $this;
    }
    
    /**
     * Identifies additional descriptive information associated with the BuildingPartCode to assist the FedEx courier in finding the pickup location.
     *
     * @param string $BuildingPartDescription
     * return FedEx_PickupService_PickupOriginDetail
     */
    public function setBuildingPartDescription($buildingPartDescription)
    {
        $this->BuildingPartDescription = $buildingPartDescription;
        return $this;
    }
    
    /**
     * Identifies the date and time the package will be ready for pickup by FedEx. Both the date and time portions of the string are expected to be used. The date should not be a past date or a date more than 10 days in the future. The time is the local time of the pickup based on the shipper's time zone. The date component must be in the format: YYYY-MM-DD (e.g. 2006-06-26). The time component must be in the format: HH:MM:SS in 24-hour form. The date and time parts are separated by the letter T (e.g. 2006-06-26T17:00:00). Because this is a local time, no TZD should be included. If a TZD is included, it will be ignored, and the time treated as local to the pickup postal code.
     *
     * @param dateTime $ReadyTimestamp
     * return FedEx_PickupService_PickupOriginDetail
     */
    public function setReadyTimestamp($readyTimestamp)
    {
        $this->ReadyTimestamp = $readyTimestamp;
        return $this;
    }
    
    /**
     * Identifies the close time of the company requesting the pickup. The time is the local time of the pickup based on the shipper's time zone. The time component must be in the format: HH:MM:SS in 24-hour form (e.g. 17:00:00). Because this is a local time, no TZD should be included. If a TZD is included, it will be ignored, and the time treated as local to the pickup postal code.
     *
     * @param time $CompanyCloseTime
     * return FedEx_PickupService_PickupOriginDetail
     */
    public function setCompanyCloseTime($companyCloseTime)
    {
        $this->CompanyCloseTime = $companyCloseTime;
        return $this;
    }
    

    
}