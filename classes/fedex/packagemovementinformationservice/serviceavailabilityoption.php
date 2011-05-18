<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The descriptive data which identifies an available FedEx Service.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PackageMovementInformationService_ServiceAvailabilityOption
    extends FedEx_AbstractComplexType
{

    /**
     * Identifies a FedEx Service that is available between the origin and destination provided in the request.
     *
     * @param ServiceType $Service
     * return FedEx_PackageMovementInformationService_ServiceAvailabilityOption
     */
    public function setService(FedEx_PackageMovementInformationService_ServiceType $service)
    {
        $this->Service = $service;
        return $this;
    }
    
    /**
     * Identifies the delivery date of the available service.
     *
     * @param date $DeliveryDate
     * return FedEx_PackageMovementInformationService_ServiceAvailabilityOption
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->DeliveryDate = $deliveryDate;
        return $this;
    }
    
    /**
     * Identifies the delivery day of week of the available service. See DayOfWeekType for valid values.
     *
     * @param DayOfWeekType $DeliveryDay
     * return FedEx_PackageMovementInformationService_ServiceAvailabilityOption
     */
    public function setDeliveryDay(FedEx_PackageMovementInformationService_DayOfWeekType $deliveryDay)
    {
        $this->DeliveryDay = $deliveryDay;
        return $this;
    }
    
    /**
     * Identifies the FedEx location identifier of the package destination.
     *
     * @param string $DestinationStationId
     * return FedEx_PackageMovementInformationService_ServiceAvailabilityOption
     */
    public function setDestinationStationId($destinationStationId)
    {
        $this->DestinationStationId = $destinationStationId;
        return $this;
    }
    
    /**
     * Identification of an airport, using standard three-letter abbreviations.
     *
     * @param string $DestinationAirportId
     * return FedEx_PackageMovementInformationService_ServiceAvailabilityOption
     */
    public function setDestinationAirportId($destinationAirportId)
    {
        $this->DestinationAirportId = $destinationAirportId;
        return $this;
    }
    

    
}