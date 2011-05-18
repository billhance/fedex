<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Information about the transit time and delivery commitment date and time.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_CommitDetail
    extends FedEx_AbstractComplexType
{

    /**
     * The Commodity applicable to this commitment.
     *
     * @param string $CommodityName
     * return FedEx_RateService_CommitDetail
     */
    public function setCommodityName($commodityName)
    {
        $this->CommodityName = $commodityName;
        return $this;
    }
    
    /**
     * The FedEx service type applicable to this commitment.
     *
     * @param ServiceType $ServiceType
     * return FedEx_RateService_CommitDetail
     */
    public function setServiceType(FedEx_RateService_ServiceType $serviceType)
    {
        $this->ServiceType = $serviceType;
        return $this;
    }
    
    /**
     * Shows the specific combination of service options combined with the service type that produced this committment in the set returned to the caller.
     *
     * @param array[ServiceOptionType] $AppliedOptions
     * return FedEx_RateService_CommitDetail
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
     * return FedEx_RateService_CommitDetail
     */
    public function setAppliedSubOptions(FedEx_RateService_ServiceSubOptionDetail $appliedSubOptions)
    {
        $this->AppliedSubOptions = $appliedSubOptions;
        return $this;
    }
    
    /**
     * THe delivery commitment date/time. Express Only.
     *
     * @param dateTime $CommitTimestamp
     * return FedEx_RateService_CommitDetail
     */
    public function setCommitTimestamp($commitTimestamp)
    {
        $this->CommitTimestamp = $commitTimestamp;
        return $this;
    }
    
    /**
     * The delivery commitment day of the week.
     *
     * @param DayOfWeekType $DayOfWeek
     * return FedEx_RateService_CommitDetail
     */
    public function setDayOfWeek(FedEx_RateService_DayOfWeekType $dayOfWeek)
    {
        $this->DayOfWeek = $dayOfWeek;
        return $this;
    }
    
    /**
     * The number of transit days; applies to Ground and LTL Freight; indicates minimum transit time for SmartPost.
     *
     * @param TransitTimeType $TransitTime
     * return FedEx_RateService_CommitDetail
     */
    public function setTransitTime(FedEx_RateService_TransitTimeType $transitTime)
    {
        $this->TransitTime = $transitTime;
        return $this;
    }
    
    /**
     * Maximum number of transit days, for SmartPost shipments.
     *
     * @param TransitTimeType $MaximumTransitTime
     * return FedEx_RateService_CommitDetail
     */
    public function setMaximumTransitTime(FedEx_RateService_TransitTimeType $maximumTransitTime)
    {
        $this->MaximumTransitTime = $maximumTransitTime;
        return $this;
    }
    
    /**
     * The service area code for the destination of this shipment. Express only.
     *
     * @param string $DestinationServiceArea
     * return FedEx_RateService_CommitDetail
     */
    public function setDestinationServiceArea($destinationServiceArea)
    {
        $this->DestinationServiceArea = $destinationServiceArea;
        return $this;
    }
    
    /**
     * The address of the broker to be used for this shipment.
     *
     * @param Address $BrokerAddress
     * return FedEx_RateService_CommitDetail
     */
    public function setBrokerAddress(FedEx_RateService_Address $brokerAddress)
    {
        $this->BrokerAddress = $brokerAddress;
        return $this;
    }
    
    /**
     * The FedEx location identifier for the broker.
     *
     * @param string $BrokerLocationId
     * return FedEx_RateService_CommitDetail
     */
    public function setBrokerLocationId($brokerLocationId)
    {
        $this->BrokerLocationId = $brokerLocationId;
        return $this;
    }
    
    /**
     * The delivery commitment date/time the shipment will arrive at the border.
     *
     * @param dateTime $BrokerCommitTimestamp
     * return FedEx_RateService_CommitDetail
     */
    public function setBrokerCommitTimestamp($brokerCommitTimestamp)
    {
        $this->BrokerCommitTimestamp = $brokerCommitTimestamp;
        return $this;
    }
    
    /**
     * The delivery commitment day of the week the shipment will arrive at the border.
     *
     * @param DayOfWeekType $BrokerCommitDayOfWeek
     * return FedEx_RateService_CommitDetail
     */
    public function setBrokerCommitDayOfWeek(FedEx_RateService_DayOfWeekType $brokerCommitDayOfWeek)
    {
        $this->BrokerCommitDayOfWeek = $brokerCommitDayOfWeek;
        return $this;
    }
    
    /**
     * The number of days it will take for the shipment to make it from broker to destination
     *
     * @param nonNegativeInteger $BrokerToDestinationDays
     * return FedEx_RateService_CommitDetail
     */
    public function setBrokerToDestinationDays($brokerToDestinationDays)
    {
        $this->BrokerToDestinationDays = $brokerToDestinationDays;
        return $this;
    }
    
    /**
     * The delivery commitment date for shipment served by GSP (Global Service Provider)
     *
     * @param date $ProofOfDeliveryDate
     * return FedEx_RateService_CommitDetail
     */
    public function setProofOfDeliveryDate($proofOfDeliveryDate)
    {
        $this->ProofOfDeliveryDate = $proofOfDeliveryDate;
        return $this;
    }
    
    /**
     * The delivery commitment day of the week for the shipment served by GSP (Global Service Provider)
     *
     * @param DayOfWeekType $ProofOfDeliveryDayOfWeek
     * return FedEx_RateService_CommitDetail
     */
    public function setProofOfDeliveryDayOfWeek(FedEx_RateService_DayOfWeekType $proofOfDeliveryDayOfWeek)
    {
        $this->ProofOfDeliveryDayOfWeek = $proofOfDeliveryDayOfWeek;
        return $this;
    }
    
    /**
     * Messages concerning the ability to provide an accurate delivery commitment on an International commit quote. These could be messages providing information about why a commitment could not be returned or a successful message such as "REQUEST COMPLETED"
     *
     * @param array[Notification] $CommitMessages
     * return FedEx_RateService_CommitDetail
     */
    public function setCommitMessages(array $commitMessages)
    {
        $this->CommitMessages = $commitMessages;
        return $this;
    }
    
    /**
     * Messages concerning the delivery commitment on an International commit quote such as "0:00 A.M. IF NO CUSTOMS DELAY"
     *
     * @param array[string] $DeliveryMessages
     * return FedEx_RateService_CommitDetail
     */
    public function setDeliveryMessages(array $deliveryMessages)
    {
        $this->DeliveryMessages = $deliveryMessages;
        return $this;
    }
    
    /**
     * Information about why a shipment delivery is delayed and at what level (country/service etc.).
     *
     * @param array[DelayDetail] $DelayDetails
     * return FedEx_RateService_CommitDetail
     */
    public function setDelayDetails(array $delayDetails)
    {
        $this->DelayDetails = $delayDetails;
        return $this;
    }
    
    /**
     * 
     *
     * @param InternationalDocumentContentType $DocumentContent
     * return FedEx_RateService_CommitDetail
     */
    public function setDocumentContent(FedEx_RateService_InternationalDocumentContentType $documentContent)
    {
        $this->DocumentContent = $documentContent;
        return $this;
    }
    
    /**
     * Required documentation for this shipment.
     *
     * @param array[RequiredShippingDocumentType] $RequiredDocuments
     * return FedEx_RateService_CommitDetail
     */
    public function setRequiredDocuments(array $requiredDocuments)
    {
        $this->RequiredDocuments = $requiredDocuments;
        return $this;
    }
    
    /**
     * Freight origin and destination city center information and total distance between origin and destination city centers.
     *
     * @param FreightCommitDetail $FreightCommitDetail
     * return FedEx_RateService_CommitDetail
     */
    public function setFreightCommitDetail(FedEx_RateService_FreightCommitDetail $freightCommitDetail)
    {
        $this->FreightCommitDetail = $freightCommitDetail;
        return $this;
    }
    

    
}