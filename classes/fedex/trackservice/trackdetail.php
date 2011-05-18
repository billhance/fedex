<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Detailed tracking information about a particular package.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_TrackService_TrackDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Holds error or warning information for a particular package.
     *
     * @param Notification $Notification
     * return FedEx_TrackService_TrackDetail
     */
    public function setNotification(FedEx_TrackService_Notification $notification)
    {
        $this->Notification = $notification;
        return $this;
    }
    
    /**
     * The tracking number of this package.
     *
     * @param string $TrackingNumber
     * return FedEx_TrackService_TrackDetail
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->TrackingNumber = $trackingNumber;
        return $this;
    }
    
    /**
     * Further identifies a tracking number in case duplicates exist. Returned if a track by number results in duplicates.
     *
     * @param string $TrackingNumberUniqueIdentifier
     * return FedEx_TrackService_TrackDetail
     */
    public function setTrackingNumberUniqueIdentifier($trackingNumberUniqueIdentifier)
    {
        $this->TrackingNumberUniqueIdentifier = $trackingNumberUniqueIdentifier;
        return $this;
    }
    
    /**
     * For example, SP = split shipment.
     *
     * @param string $StatusCode
     * return FedEx_TrackService_TrackDetail
     */
    public function setStatusCode($statusCode)
    {
        $this->StatusCode = $statusCode;
        return $this;
    }
    
    /**
     * Tracking status description of this package.
     *
     * @param string $StatusDescription
     * return FedEx_TrackService_TrackDetail
     */
    public function setStatusDescription($statusDescription)
    {
        $this->StatusDescription = $statusDescription;
        return $this;
    }
    
    /**
     * Tracking reconciliation of this package.
     *
     * @param TrackReconciliation $Reconciliation
     * return FedEx_TrackService_TrackDetail
     */
    public function setReconciliation(FedEx_TrackService_TrackReconciliation $reconciliation)
    {
        $this->Reconciliation = $reconciliation;
        return $this;
    }
    
    /**
     * Only applicable to H3 Express freight areas inbound to U.S. to FedEx location only. Additional days may be required for final delivery. Please call Customer Service for details.
     *
     * @param string $ServiceCommitMessage
     * return FedEx_TrackService_TrackDetail
     */
    public function setServiceCommitMessage($serviceCommitMessage)
    {
        $this->ServiceCommitMessage = $serviceCommitMessage;
        return $this;
    }
    
    /**
     * Carrier associated with tracking number.
     *
     * @param CarrierCodeType $CarrierCode
     * return FedEx_TrackService_TrackDetail
     */
    public function setCarrierCode(FedEx_TrackService_CarrierCodeType $carrierCode)
    {
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    
    /**
     * Other related identifiers for this package such as reference numbers. May occur zero to many times for each tracking number.
     *
     * @param array[TrackPackageIdentifier] $OtherIdentifiers
     * return FedEx_TrackService_TrackDetail
     */
    public function setOtherIdentifiers(array $otherIdentifiers)
    {
        $this->OtherIdentifiers = $otherIdentifiers;
        return $this;
    }
    
    /**
     * The service type of this package.
     *
     * @param string $ServiceInfo
     * return FedEx_TrackService_TrackDetail
     */
    public function setServiceInfo($serviceInfo)
    {
        $this->ServiceInfo = $serviceInfo;
        return $this;
    }
    
    /**
     * The enumerated service type of this package.
     *
     * @param ServiceType $ServiceType
     * return FedEx_TrackService_TrackDetail
     */
    public function setServiceType(FedEx_TrackService_ServiceType $serviceType)
    {
        $this->ServiceType = $serviceType;
        return $this;
    }
    
    /**
     * The weight of this package.
     *
     * @param Weight $PackageWeight
     * return FedEx_TrackService_TrackDetail
     */
    public function setPackageWeight(FedEx_TrackService_Weight $packageWeight)
    {
        $this->PackageWeight = $packageWeight;
        return $this;
    }
    
    /**
     * Not available at this time.
     *
     * @param Weight $PackageDimensionalWeight
     * return FedEx_TrackService_TrackDetail
     */
    public function setPackageDimensionalWeight(FedEx_TrackService_Weight $packageDimensionalWeight)
    {
        $this->PackageDimensionalWeight = $packageDimensionalWeight;
        return $this;
    }
    
    /**
     * The weight of this entire shipment.
     *
     * @param Weight $ShipmentWeight
     * return FedEx_TrackService_TrackDetail
     */
    public function setShipmentWeight(FedEx_TrackService_Weight $shipmentWeight)
    {
        $this->ShipmentWeight = $shipmentWeight;
        return $this;
    }
    
    /**
     * The packaging type of this package.
     *
     * @param string $Packaging
     * return FedEx_TrackService_TrackDetail
     */
    public function setPackaging($packaging)
    {
        $this->Packaging = $packaging;
        return $this;
    }
    
    /**
     * The enumerated packaging type used for this package.
     *
     * @param PackagingType $PackagingType
     * return FedEx_TrackService_TrackDetail
     */
    public function setPackagingType(FedEx_TrackService_PackagingType $packagingType)
    {
        $this->PackagingType = $packagingType;
        return $this;
    }
    
    /**
     * The sequence of the package for FedEx Express international MPS (1 of X).
     *
     * @param nonNegativeInteger $PackageSequenceNumber
     * return FedEx_TrackService_TrackDetail
     */
    public function setPackageSequenceNumber($packageSequenceNumber)
    {
        $this->PackageSequenceNumber = $packageSequenceNumber;
        return $this;
    }
    
    /**
     * The number of pieces in this shipment.
     *
     * @param nonNegativeInteger $PackageCount
     * return FedEx_TrackService_TrackDetail
     */
    public function setPackageCount($packageCount)
    {
        $this->PackageCount = $packageCount;
        return $this;
    }
    
    /**
     * The address information for the shipper.
     *
     * @param Address $ShipperAddress
     * return FedEx_TrackService_TrackDetail
     */
    public function setShipperAddress(FedEx_TrackService_Address $shipperAddress)
    {
        $this->ShipperAddress = $shipperAddress;
        return $this;
    }
    
    /**
     * The address information for the origin of the package.
     *
     * @param Address $OriginLocationAddress
     * return FedEx_TrackService_TrackDetail
     */
    public function setOriginLocationAddress(FedEx_TrackService_Address $originLocationAddress)
    {
        $this->OriginLocationAddress = $originLocationAddress;
        return $this;
    }
    
    /**
     * Estimated package pickup time for shipments that haven't been picked up yet.
     *
     * @param dateTime $EstimatedPickupTimestamp
     * return FedEx_TrackService_TrackDetail
     */
    public function setEstimatedPickupTimestamp($estimatedPickupTimestamp)
    {
        $this->EstimatedPickupTimestamp = $estimatedPickupTimestamp;
        return $this;
    }
    
    /**
     * Time package was shipped/tendered over to FedEx. Time portion will be populated if available, otherwise will be set to midnight.
     *
     * @param dateTime $ShipTimestamp
     * return FedEx_TrackService_TrackDetail
     */
    public function setShipTimestamp($shipTimestamp)
    {
        $this->ShipTimestamp = $shipTimestamp;
        return $this;
    }
    
    /**
     * Total distance package traveled. Returned in miles only at this time.
     *
     * @param Distance $TotalTransitDistance
     * return FedEx_TrackService_TrackDetail
     */
    public function setTotalTransitDistance(FedEx_TrackService_Distance $totalTransitDistance)
    {
        $this->TotalTransitDistance = $totalTransitDistance;
        return $this;
    }
    
    /**
     * Total distance package still has to travel. Returned in miles only at this time.
     *
     * @param Distance $DistanceToDestination
     * return FedEx_TrackService_TrackDetail
     */
    public function setDistanceToDestination(FedEx_TrackService_Distance $distanceToDestination)
    {
        $this->DistanceToDestination = $distanceToDestination;
        return $this;
    }
    
    /**
     * The address the package is destined to.
     *
     * @param Address $DestinationAddress
     * return FedEx_TrackService_TrackDetail
     */
    public function setDestinationAddress(FedEx_TrackService_Address $destinationAddress)
    {
        $this->DestinationAddress = $destinationAddress;
        return $this;
    }
    
    /**
     * The address of the carrier facility for the package destination.
     *
     * @param Address $DestinationLocationAddress
     * return FedEx_TrackService_TrackDetail
     */
    public function setDestinationLocationAddress(FedEx_TrackService_Address $destinationLocationAddress)
    {
        $this->DestinationLocationAddress = $destinationLocationAddress;
        return $this;
    }
    
    /**
     * Projected package delivery time based on ship time stamp, service and destination. Not populated if delivery has already occurred.
     *
     * @param dateTime $EstimatedDeliveryTimestamp
     * return FedEx_TrackService_TrackDetail
     */
    public function setEstimatedDeliveryTimestamp($estimatedDeliveryTimestamp)
    {
        $this->EstimatedDeliveryTimestamp = $estimatedDeliveryTimestamp;
        return $this;
    }
    
    /**
     * The time the package was actually delivered.
     *
     * @param dateTime $ActualDeliveryTimestamp
     * return FedEx_TrackService_TrackDetail
     */
    public function setActualDeliveryTimestamp($actualDeliveryTimestamp)
    {
        $this->ActualDeliveryTimestamp = $actualDeliveryTimestamp;
        return $this;
    }
    
    /**
     * The address where the package was delivered.
     *
     * @param Address $ActualDeliveryAddress
     * return FedEx_TrackService_TrackDetail
     */
    public function setActualDeliveryAddress(FedEx_TrackService_Address $actualDeliveryAddress)
    {
        $this->ActualDeliveryAddress = $actualDeliveryAddress;
        return $this;
    }
    
    /**
     * The delivery location at the delivered to address.
     *
     * @param TrackDeliveryLocationType $DeliveryLocationType
     * return FedEx_TrackService_TrackDetail
     */
    public function setDeliveryLocationType(FedEx_TrackService_TrackDeliveryLocationType $deliveryLocationType)
    {
        $this->DeliveryLocationType = $deliveryLocationType;
        return $this;
    }
    
    /**
     * A description of where the package was delivered (Front Desk, Back Door, etc.)
     *
     * @param string $DeliveryLocationDescription
     * return FedEx_TrackService_TrackDetail
     */
    public function setDeliveryLocationDescription($deliveryLocationDescription)
    {
        $this->DeliveryLocationDescription = $deliveryLocationDescription;
        return $this;
    }
    
    /**
     * Name on delivery record or release number.
     *
     * @param string $DeliverySignatureName
     * return FedEx_TrackService_TrackDetail
     */
    public function setDeliverySignatureName($deliverySignatureName)
    {
        $this->DeliverySignatureName = $deliverySignatureName;
        return $this;
    }
    
    /**
     * True if signed for signature image is available.
     *
     * @param boolean $SignatureProofOfDeliveryAvailable
     * return FedEx_TrackService_TrackDetail
     */
    public function setSignatureProofOfDeliveryAvailable($signatureProofOfDeliveryAvailable)
    {
        $this->SignatureProofOfDeliveryAvailable = $signatureProofOfDeliveryAvailable;
        return $this;
    }
    
    /**
     * True if delivery email updates are available for this tracking number.
     *
     * @param boolean $ProofOfDeliveryNotificationsAvailable
     * return FedEx_TrackService_TrackDetail
     */
    public function setProofOfDeliveryNotificationsAvailable($proofOfDeliveryNotificationsAvailable)
    {
        $this->ProofOfDeliveryNotificationsAvailable = $proofOfDeliveryNotificationsAvailable;
        return $this;
    }
    
    /**
     * True if exception email updates are available for this tracking number. Exception notifications include: General Delivery Exception, Incorrect Address,Clearance Delay, and International Shipment Release. Exception notifications are not available after shipment delivery.
     *
     * @param boolean $ExceptionNotificationsAvailable
     * return FedEx_TrackService_TrackDetail
     */
    public function setExceptionNotificationsAvailable($exceptionNotificationsAvailable)
    {
        $this->ExceptionNotificationsAvailable = $exceptionNotificationsAvailable;
        return $this;
    }
    
    /**
     * Returned for cargo shipments only when they are currently split across vehicles.
     *
     * @param array[TrackSplitShipmentPart] $SplitShipmentParts
     * return FedEx_TrackService_TrackDetail
     */
    public function setSplitShipmentParts(array $splitShipmentParts)
    {
        $this->SplitShipmentParts = $splitShipmentParts;
        return $this;
    }
    
    /**
     * Event information for a tracking number.
     *
     * @param array[TrackEvent] $Events
     * return FedEx_TrackService_TrackDetail
     */
    public function setEvents(array $events)
    {
        $this->Events = $events;
        return $this;
    }
    

    
}