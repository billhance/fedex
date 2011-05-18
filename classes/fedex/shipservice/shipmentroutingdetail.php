<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Information about the routing, origin, destination and delivery of a shipment.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_ShipmentRoutingDetail
    extends FedEx_AbstractComplexType
{

    /**
     * The prefix portion of the URSA (Universal Routing and Sort Aid) code.
     *
     * @param string $UrsaPrefixCode
     * return FedEx_ShipService_ShipmentRoutingDetail
     */
    public function setUrsaPrefixCode($ursaPrefixCode)
    {
        $this->UrsaPrefixCode = $ursaPrefixCode;
        return $this;
    }
    
    /**
     * The suffix portion of the URSA code.
     *
     * @param string $UrsaSuffixCode
     * return FedEx_ShipService_ShipmentRoutingDetail
     */
    public function setUrsaSuffixCode($ursaSuffixCode)
    {
        $this->UrsaSuffixCode = $ursaSuffixCode;
        return $this;
    }
    
    /**
     * The identifier of the origin location of the shipment. Express only.
     *
     * @param string $OriginLocationId
     * return FedEx_ShipService_ShipmentRoutingDetail
     */
    public function setOriginLocationId($originLocationId)
    {
        $this->OriginLocationId = $originLocationId;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $OriginServiceArea
     * return FedEx_ShipService_ShipmentRoutingDetail
     */
    public function setOriginServiceArea($originServiceArea)
    {
        $this->OriginServiceArea = $originServiceArea;
        return $this;
    }
    
    /**
     * The identifier of the destination location of the shipment. Express only.
     *
     * @param string $DestinationLocationId
     * return FedEx_ShipService_ShipmentRoutingDetail
     */
    public function setDestinationLocationId($destinationLocationId)
    {
        $this->DestinationLocationId = $destinationLocationId;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $DestinationServiceArea
     * return FedEx_ShipService_ShipmentRoutingDetail
     */
    public function setDestinationServiceArea($destinationServiceArea)
    {
        $this->DestinationServiceArea = $destinationServiceArea;
        return $this;
    }
    
    /**
     * This is the state of the destination location ID, and is not necessarily the same as the postal state.
     *
     * @param string $DestinationLocationStateOrProvinceCode
     * return FedEx_ShipService_ShipmentRoutingDetail
     */
    public function setDestinationLocationStateOrProvinceCode($destinationLocationStateOrProvinceCode)
    {
        $this->DestinationLocationStateOrProvinceCode = $destinationLocationStateOrProvinceCode;
        return $this;
    }
    
    /**
     * Expected/estimated date of delivery.
     *
     * @param date $DeliveryDate
     * return FedEx_ShipService_ShipmentRoutingDetail
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->DeliveryDate = $deliveryDate;
        return $this;
    }
    
    /**
     * Expected/estimated day of week of delivery.
     *
     * @param DayOfWeekType $DeliveryDay
     * return FedEx_ShipService_ShipmentRoutingDetail
     */
    public function setDeliveryDay(FedEx_ShipService_DayOfWeekType $deliveryDay)
    {
        $this->DeliveryDay = $deliveryDay;
        return $this;
    }
    
    /**
     * Committed date of delivery.
     *
     * @param date $CommitDate
     * return FedEx_ShipService_ShipmentRoutingDetail
     */
    public function setCommitDate($commitDate)
    {
        $this->CommitDate = $commitDate;
        return $this;
    }
    
    /**
     * Committed day of week of delivery.
     *
     * @param DayOfWeekType $CommitDay
     * return FedEx_ShipService_ShipmentRoutingDetail
     */
    public function setCommitDay(FedEx_ShipService_DayOfWeekType $commitDay)
    {
        $this->CommitDay = $commitDay;
        return $this;
    }
    
    /**
     * Standard transit time per origin, destination, and service.
     *
     * @param TransitTimeType $TransitTime
     * return FedEx_ShipService_ShipmentRoutingDetail
     */
    public function setTransitTime(FedEx_ShipService_TransitTimeType $transitTime)
    {
        $this->TransitTime = $transitTime;
        return $this;
    }
    
    /**
     * Maximum expected transit time
     *
     * @param TransitTimeType $MaximumTransitTime
     * return FedEx_ShipService_ShipmentRoutingDetail
     */
    public function setMaximumTransitTime(FedEx_ShipService_TransitTimeType $maximumTransitTime)
    {
        $this->MaximumTransitTime = $maximumTransitTime;
        return $this;
    }
    
    /**
     * Text describing planned delivery.
     *
     * @param string $AstraPlannedServiceLevel
     * return FedEx_ShipService_ShipmentRoutingDetail
     */
    public function setAstraPlannedServiceLevel($astraPlannedServiceLevel)
    {
        $this->AstraPlannedServiceLevel = $astraPlannedServiceLevel;
        return $this;
    }
    
    /**
     * Currently not supported.
     *
     * @param string $AstraDescription
     * return FedEx_ShipService_ShipmentRoutingDetail
     */
    public function setAstraDescription($astraDescription)
    {
        $this->AstraDescription = $astraDescription;
        return $this;
    }
    
    /**
     * The postal code of the destination of the shipment.
     *
     * @param string $PostalCode
     * return FedEx_ShipService_ShipmentRoutingDetail
     */
    public function setPostalCode($postalCode)
    {
        $this->PostalCode = $postalCode;
        return $this;
    }
    
    /**
     * The state or province code of the destination of the shipment.
     *
     * @param string $StateOrProvinceCode
     * return FedEx_ShipService_ShipmentRoutingDetail
     */
    public function setStateOrProvinceCode($stateOrProvinceCode)
    {
        $this->StateOrProvinceCode = $stateOrProvinceCode;
        return $this;
    }
    
    /**
     * The country code of the destination of the shipment.
     *
     * @param string $CountryCode
     * return FedEx_ShipService_ShipmentRoutingDetail
     */
    public function setCountryCode($countryCode)
    {
        $this->CountryCode = $countryCode;
        return $this;
    }
    
    /**
     * The identifier for the airport of the destination of the shipment.
     *
     * @param string $AirportId
     * return FedEx_ShipService_ShipmentRoutingDetail
     */
    public function setAirportId($airportId)
    {
        $this->AirportId = $airportId;
        return $this;
    }
    

    
}