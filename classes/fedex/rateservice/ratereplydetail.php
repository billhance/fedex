<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_RateReplyDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Identifies the FedEx service to use in shipping the package. See ServiceType for list of valid enumerated values.
     *
     * @param ServiceType $ServiceType
     * return FedEx_RateService_RateReplyDetail
     */
    public function setServiceType(FedEx_RateService_ServiceType $serviceType)
    {
        $this->ServiceType = $serviceType;
        return $this;
    }
    
    /**
     * Identifies the packaging used by the requestor for the package. See PackagingType for list of valid enumerated values.
     *
     * @param PackagingType $PackagingType
     * return FedEx_RateService_RateReplyDetail
     */
    public function setPackagingType(FedEx_RateService_PackagingType $packagingType)
    {
        $this->PackagingType = $packagingType;
        return $this;
    }
    
    /**
     * Shows the specific combination of service options combined with the service type that produced this committment in the set returned to the caller.
     *
     * @param array[ServiceOptionType] $AppliedOptions
     * return FedEx_RateService_RateReplyDetail
     */
    public function setAppliedOptions(array $appliedOptions)
    {
        $this->AppliedOptions = $appliedOptions;
        return $this;
    }
    
    /**
     * Supporting detail for applied options identified in preceding field.
     *
     * @param ServiceSubOptionDetail $AppliedSubOptions
     * return FedEx_RateService_RateReplyDetail
     */
    public function setAppliedSubOptions(FedEx_RateService_ServiceSubOptionDetail $appliedSubOptions)
    {
        $this->AppliedSubOptions = $appliedSubOptions;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $DeliveryStation
     * return FedEx_RateService_RateReplyDetail
     */
    public function setDeliveryStation($deliveryStation)
    {
        $this->DeliveryStation = $deliveryStation;
        return $this;
    }
    
    /**
     * 
     *
     * @param DayOfWeekType $DeliveryDayOfWeek
     * return FedEx_RateService_RateReplyDetail
     */
    public function setDeliveryDayOfWeek(FedEx_RateService_DayOfWeekType $deliveryDayOfWeek)
    {
        $this->DeliveryDayOfWeek = $deliveryDayOfWeek;
        return $this;
    }
    
    /**
     * 
     *
     * @param dateTime $DeliveryTimestamp
     * return FedEx_RateService_RateReplyDetail
     */
    public function setDeliveryTimestamp($deliveryTimestamp)
    {
        $this->DeliveryTimestamp = $deliveryTimestamp;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[CommitDetail] $CommitDetails
     * return FedEx_RateService_RateReplyDetail
     */
    public function setCommitDetails(array $commitDetails)
    {
        $this->CommitDetails = $commitDetails;
        return $this;
    }
    
    /**
     * Identification of an airport, using standard three-letter abbreviations.
     *
     * @param string $DestinationAirportId
     * return FedEx_RateService_RateReplyDetail
     */
    public function setDestinationAirportId($destinationAirportId)
    {
        $this->DestinationAirportId = $destinationAirportId;
        return $this;
    }
    
    /**
     * Indicates whether or not this shipment is eligible for a money back guarantee.
     *
     * @param boolean $IneligibleForMoneyBackGuarantee
     * return FedEx_RateService_RateReplyDetail
     */
    public function setIneligibleForMoneyBackGuarantee($ineligibleForMoneyBackGuarantee)
    {
        $this->IneligibleForMoneyBackGuarantee = $ineligibleForMoneyBackGuarantee;
        return $this;
    }
    
    /**
     * Commitment code for the origin.
     *
     * @param string $OriginServiceArea
     * return FedEx_RateService_RateReplyDetail
     */
    public function setOriginServiceArea($originServiceArea)
    {
        $this->OriginServiceArea = $originServiceArea;
        return $this;
    }
    
    /**
     * Commitment code for the destination.
     *
     * @param string $DestinationServiceArea
     * return FedEx_RateService_RateReplyDetail
     */
    public function setDestinationServiceArea($destinationServiceArea)
    {
        $this->DestinationServiceArea = $destinationServiceArea;
        return $this;
    }
    
    /**
     * Time in transit from pickup to delivery.
     *
     * @param TransitTimeType $TransitTime
     * return FedEx_RateService_RateReplyDetail
     */
    public function setTransitTime(FedEx_RateService_TransitTimeType $transitTime)
    {
        $this->TransitTime = $transitTime;
        return $this;
    }
    
    /**
     * Maximum expected transit time.
     *
     * @param TransitTimeType $MaximumTransitTime
     * return FedEx_RateService_RateReplyDetail
     */
    public function setMaximumTransitTime(FedEx_RateService_TransitTimeType $maximumTransitTime)
    {
        $this->MaximumTransitTime = $maximumTransitTime;
        return $this;
    }
    
    /**
     * The signature option for this package.
     *
     * @param SignatureOptionType $SignatureOption
     * return FedEx_RateService_RateReplyDetail
     */
    public function setSignatureOption(FedEx_RateService_SignatureOptionType $signatureOption)
    {
        $this->SignatureOption = $signatureOption;
        return $this;
    }
    
    /**
     * The actual rate type of the charges for this package.
     *
     * @param ReturnedRateType $ActualRateType
     * return FedEx_RateService_RateReplyDetail
     */
    public function setActualRateType(FedEx_RateService_ReturnedRateType $actualRateType)
    {
        $this->ActualRateType = $actualRateType;
        return $this;
    }
    
    /**
     * Each element contains all rate data for a single rate type.
     *
     * @param array[RatedShipmentDetail] $RatedShipmentDetails
     * return FedEx_RateService_RateReplyDetail
     */
    public function setRatedShipmentDetails(array $ratedShipmentDetails)
    {
        $this->RatedShipmentDetails = $ratedShipmentDetails;
        return $this;
    }
    

    
}