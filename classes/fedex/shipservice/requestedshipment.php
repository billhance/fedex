<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The descriptive data for the shipment being tendered to FedEx.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_RequestedShipment
    extends FedEx_AbstractComplexType
{

    /**
     * Identifies the date and time the package is tendered to FedEx. Both the date and time portions of the string are expected to be used. The date should not be a past date or a date more than 10 days in the future. The time is the local time of the shipment based on the shipper's time zone. The date component must be in the format: YYYY-MM-DD (e.g. 2006-06-26). The time component must be in the format: HH:MM:SS using a 24 hour clock (e.g. 11:00 a.m. is 11:00:00, whereas 5:00 p.m. is 17:00:00). The date and time parts are separated by the letter T (e.g. 2006-06-26T17:00:00). There is also a UTC offset component indicating the number of hours/mainutes from UTC (e.g 2006-06-26T17:00:00-0400 is defined form June 26, 2006 5:00 pm Eastern Time).
     *
     * @param dateTime $ShipTimestamp
     * return FedEx_ShipService_RequestedShipment
     */
    public function setShipTimestamp($shipTimestamp)
    {
        $this->ShipTimestamp = $shipTimestamp;
        return $this;
    }
    
    /**
     * Identifies the method by which the package is to be tendered to FedEx. This element does not dispatch a courier for package pickup. See DropoffType for list of valid enumerated values.
     *
     * @param DropoffType $DropoffType
     * return FedEx_ShipService_RequestedShipment
     */
    public function setDropoffType(FedEx_ShipService_DropoffType $dropoffType)
    {
        $this->DropoffType = $dropoffType;
        return $this;
    }
    
    /**
     * Identifies the FedEx service to use in shipping the package. See ServiceType for list of valid enumerated values.
     *
     * @param ServiceType $ServiceType
     * return FedEx_ShipService_RequestedShipment
     */
    public function setServiceType(FedEx_ShipService_ServiceType $serviceType)
    {
        $this->ServiceType = $serviceType;
        return $this;
    }
    
    /**
     * Identifies the packaging used by the requestor for the package. See PackagingType for list of valid enumerated values.
     *
     * @param PackagingType $PackagingType
     * return FedEx_ShipService_RequestedShipment
     */
    public function setPackagingType(FedEx_ShipService_PackagingType $packagingType)
    {
        $this->PackagingType = $packagingType;
        return $this;
    }
    
    /**
     * Identifies the total weight of the shipment being conveyed to FedEx.This is only applicable to International shipments and should only be used on the first package of a mutiple piece shipment.This value contains 1 explicit decimal position
     *
     * @param Weight $TotalWeight
     * return FedEx_ShipService_RequestedShipment
     */
    public function setTotalWeight(FedEx_ShipService_Weight $totalWeight)
    {
        $this->TotalWeight = $totalWeight;
        return $this;
    }
    
    /**
     * Total insured amount.
     *
     * @param Money $TotalInsuredValue
     * return FedEx_ShipService_RequestedShipment
     */
    public function setTotalInsuredValue(FedEx_ShipService_Money $totalInsuredValue)
    {
        $this->TotalInsuredValue = $totalInsuredValue;
        return $this;
    }
    
    /**
     * 
     *
     * @param Dimensions $TotalDimensions
     * return FedEx_ShipService_RequestedShipment
     */
    public function setTotalDimensions(FedEx_ShipService_Dimensions $totalDimensions)
    {
        $this->TotalDimensions = $totalDimensions;
        return $this;
    }
    
    /**
     * Descriptive data identifying the party responsible for shipping the package. Shipper and Origin should have the same address.
     *
     * @param Party $Shipper
     * return FedEx_ShipService_RequestedShipment
     */
    public function setShipper(FedEx_ShipService_Party $shipper)
    {
        $this->Shipper = $shipper;
        return $this;
    }
    
    /**
     * Descriptive data identifying the party receiving the package.
     *
     * @param Party $Recipient
     * return FedEx_ShipService_RequestedShipment
     */
    public function setRecipient(FedEx_ShipService_Party $recipient)
    {
        $this->Recipient = $recipient;
        return $this;
    }
    
    /**
     * A unique identifier for a recipient location
     *
     * @param string $RecipientLocationNumber
     * return FedEx_ShipService_RequestedShipment
     */
    public function setRecipientLocationNumber($recipientLocationNumber)
    {
        $this->RecipientLocationNumber = $recipientLocationNumber;
        return $this;
    }
    
    /**
     * Physical starting address for the shipment, if different from shipper's address.
     *
     * @param ContactAndAddress $Origin
     * return FedEx_ShipService_RequestedShipment
     */
    public function setOrigin(FedEx_ShipService_ContactAndAddress $origin)
    {
        $this->Origin = $origin;
        return $this;
    }
    
    /**
     * Descriptive data indicating the method and means of payment to FedEx for providing shipping services.
     *
     * @param Payment $ShippingChargesPayment
     * return FedEx_ShipService_RequestedShipment
     */
    public function setShippingChargesPayment(FedEx_ShipService_Payment $shippingChargesPayment)
    {
        $this->ShippingChargesPayment = $shippingChargesPayment;
        return $this;
    }
    
    /**
     * Descriptive data regarding special services requested by the shipper for this shipment. If the shipper is requesting a special service which requires additional data (e.g. COD), the special service type must be present in the specialServiceTypes collection, and the supporting detail must be provided in the appropriate sub-object. For example, to request COD, "COD" must be included in the SpecialServiceTypes collection and the CodDetail object must contain the required data.
     *
     * @param ShipmentSpecialServicesRequested $SpecialServicesRequested
     * return FedEx_ShipService_RequestedShipment
     */
    public function setSpecialServicesRequested(FedEx_ShipService_ShipmentSpecialServicesRequested $specialServicesRequested)
    {
        $this->SpecialServicesRequested = $specialServicesRequested;
        return $this;
    }
    
    /**
     * Details specific to an Express freight shipment.
     *
     * @param ExpressFreightDetail $ExpressFreightDetail
     * return FedEx_ShipService_RequestedShipment
     */
    public function setExpressFreightDetail(FedEx_ShipService_ExpressFreightDetail $expressFreightDetail)
    {
        $this->ExpressFreightDetail = $expressFreightDetail;
        return $this;
    }
    
    /**
     * Data applicable to shipments using FEDEX_FREIGHT and FEDEX_NATIONAL_FREIGHT services.
     *
     * @param FreightShipmentDetail $FreightShipmentDetail
     * return FedEx_ShipService_RequestedShipment
     */
    public function setFreightShipmentDetail(FedEx_ShipService_FreightShipmentDetail $freightShipmentDetail)
    {
        $this->FreightShipmentDetail = $freightShipmentDetail;
        return $this;
    }
    
    /**
     * Used with Ground Home Delivery and Freight.
     *
     * @param string $DeliveryInstructions
     * return FedEx_ShipService_RequestedShipment
     */
    public function setDeliveryInstructions($deliveryInstructions)
    {
        $this->DeliveryInstructions = $deliveryInstructions;
        return $this;
    }
    
    /**
     * Details about how to calculate variable handling charges at the shipment level.
     *
     * @param VariableHandlingChargeDetail $VariableHandlingChargeDetail
     * return FedEx_ShipService_RequestedShipment
     */
    public function setVariableHandlingChargeDetail(FedEx_ShipService_VariableHandlingChargeDetail $variableHandlingChargeDetail)
    {
        $this->VariableHandlingChargeDetail = $variableHandlingChargeDetail;
        return $this;
    }
    
    /**
     * Customs clearance data, used for both international and intra-country shipping.
     *
     * @param CustomsClearanceDetail $CustomsClearanceDetail
     * return FedEx_ShipService_RequestedShipment
     */
    public function setCustomsClearanceDetail(FedEx_ShipService_CustomsClearanceDetail $customsClearanceDetail)
    {
        $this->CustomsClearanceDetail = $customsClearanceDetail;
        return $this;
    }
    
    /**
     * For use in "process tag" transaction.
     *
     * @param PickupDetail $PickupDetail
     * return FedEx_ShipService_RequestedShipment
     */
    public function setPickupDetail(FedEx_ShipService_PickupDetail $pickupDetail)
    {
        $this->PickupDetail = $pickupDetail;
        return $this;
    }
    
    /**
     * 
     *
     * @param SmartPostShipmentDetail $SmartPostDetail
     * return FedEx_ShipService_RequestedShipment
     */
    public function setSmartPostDetail(FedEx_ShipService_SmartPostShipmentDetail $smartPostDetail)
    {
        $this->SmartPostDetail = $smartPostDetail;
        return $this;
    }
    
    /**
     * If true, only the shipper/payor will have visibility of this shipment.
     *
     * @param boolean $BlockInsightVisibility
     * return FedEx_ShipService_RequestedShipment
     */
    public function setBlockInsightVisibility($blockInsightVisibility)
    {
        $this->BlockInsightVisibility = $blockInsightVisibility;
        return $this;
    }
    
    /**
     * Specifies the client-requested response in the event of errors within shipment.
     *
     * @param ErrorLabelBehaviorType $ErrorLabelBehavior
     * return FedEx_ShipService_RequestedShipment
     */
    public function setErrorLabelBehavior(FedEx_ShipService_ErrorLabelBehaviorType $errorLabelBehavior)
    {
        $this->ErrorLabelBehavior = $errorLabelBehavior;
        return $this;
    }
    
    /**
     * Details about the image format and printer type the label is to returned in.
     *
     * @param LabelSpecification $LabelSpecification
     * return FedEx_ShipService_RequestedShipment
     */
    public function setLabelSpecification(FedEx_ShipService_LabelSpecification $labelSpecification)
    {
        $this->LabelSpecification = $labelSpecification;
        return $this;
    }
    
    /**
     * Contains data used to create additional (non-label) shipping documents.
     *
     * @param ShippingDocumentSpecification $ShippingDocumentSpecification
     * return FedEx_ShipService_RequestedShipment
     */
    public function setShippingDocumentSpecification(FedEx_ShipService_ShippingDocumentSpecification $shippingDocumentSpecification)
    {
        $this->ShippingDocumentSpecification = $shippingDocumentSpecification;
        return $this;
    }
    
    /**
     * Specifies whether and what kind of rates the customer wishes to have quoted on this shipment. The reply will also be constrained by other data on the shipment and customer.
     *
     * @param array[RateRequestType] $RateRequestTypes
     * return FedEx_ShipService_RequestedShipment
     */
    public function setRateRequestTypes(array $rateRequestTypes)
    {
        $this->RateRequestTypes = $rateRequestTypes;
        return $this;
    }
    
    /**
     * Specifies the type of rate the customer wishes to have used as the actual rate type.
     *
     * @param ReturnedRateType $CustomerSelectedActualRateType
     * return FedEx_ShipService_RequestedShipment
     */
    public function setCustomerSelectedActualRateType(FedEx_ShipService_ReturnedRateType $customerSelectedActualRateType)
    {
        $this->CustomerSelectedActualRateType = $customerSelectedActualRateType;
        return $this;
    }
    
    /**
     * Specifies whether the customer wishes to have Estimated Duties and Taxes provided with the rate quotation on this shipment. Only applies with shipments moving under international services.
     *
     * @param EdtRequestType $EdtRequestType
     * return FedEx_ShipService_RequestedShipment
     */
    public function setEdtRequestType(FedEx_ShipService_EdtRequestType $edtRequestType)
    {
        $this->EdtRequestType = $edtRequestType;
        return $this;
    }
    
    /**
     * Only used with multiple-transaction shipments.
     *
     * @param TrackingId $MasterTrackingId
     * return FedEx_ShipService_RequestedShipment
     */
    public function setMasterTrackingId(FedEx_ShipService_TrackingId $masterTrackingId)
    {
        $this->MasterTrackingId = $masterTrackingId;
        return $this;
    }
    
    /**
     * Only used with multi-piece COD shipments sent in multiple transactions. Required on last transaction only.
     *
     * @param TrackingId $CodReturnTrackingId
     * return FedEx_ShipService_RequestedShipment
     */
    public function setCodReturnTrackingId(FedEx_ShipService_TrackingId $codReturnTrackingId)
    {
        $this->CodReturnTrackingId = $codReturnTrackingId;
        return $this;
    }
    
    /**
     * The total number of packages in the entire shipment (even when the shipment spans multiple transactions.)
     *
     * @param nonNegativeInteger $PackageCount
     * return FedEx_ShipService_RequestedShipment
     */
    public function setPackageCount($packageCount)
    {
        $this->PackageCount = $packageCount;
        return $this;
    }
    
    /**
     * Specifies whether packages are described individually, in groups, or summarized in a single description for total-piece-total-weight. This field controls which fields of the RequestedPackageLineItem will be used, and how many occurrences are expected.
     *
     * @param RequestedPackageDetailType $PackageDetail
     * return FedEx_ShipService_RequestedShipment
     */
    public function setPackageDetail(FedEx_ShipService_RequestedPackageDetailType $packageDetail)
    {
        $this->PackageDetail = $packageDetail;
        return $this;
    }
    
    /**
     * One or more package-attribute descriptions, each of which describes an individual package, a group of identical packages, or (for the total-piece-total-weight case) common characteristics all packages in the shipment.
     *
     * @param array[RequestedPackageLineItem] $RequestedPackageLineItems
     * return FedEx_ShipService_RequestedShipment
     */
    public function setRequestedPackageLineItems(array $requestedPackageLineItems)
    {
        $this->RequestedPackageLineItems = $requestedPackageLineItems;
        return $this;
    }
    

    
}