<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_CompletedShipmentDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Indicates whether or not this is a US Domestic shipment.
     *
     * @param boolean $UsDomestic
     * return FedEx_ShipService_CompletedShipmentDetail
     */
    public function setUsDomestic($usDomestic)
    {
        $this->UsDomestic = $usDomestic;
        return $this;
    }
    
    /**
     * Indicates the carrier that will be used to deliver this shipment.
     *
     * @param CarrierCodeType $CarrierCode
     * return FedEx_ShipService_CompletedShipmentDetail
     */
    public function setCarrierCode(FedEx_ShipService_CarrierCodeType $carrierCode)
    {
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    
    /**
     * The master tracking number and form id of this multiple piece shipment. This information is to be provided for each subsequent of a multiple piece shipment.
     *
     * @param TrackingId $MasterTrackingId
     * return FedEx_ShipService_CompletedShipmentDetail
     */
    public function setMasterTrackingId(FedEx_ShipService_TrackingId $masterTrackingId)
    {
        $this->MasterTrackingId = $masterTrackingId;
        return $this;
    }
    
    /**
     * Description of the FedEx service used for this shipment. Currently not supported.
     *
     * @param string $ServiceTypeDescription
     * return FedEx_ShipService_CompletedShipmentDetail
     */
    public function setServiceTypeDescription($serviceTypeDescription)
    {
        $this->ServiceTypeDescription = $serviceTypeDescription;
        return $this;
    }
    
    /**
     * Description of the packaging used for this shipment. Currently not supported.
     *
     * @param string $PackagingDescription
     * return FedEx_ShipService_CompletedShipmentDetail
     */
    public function setPackagingDescription($packagingDescription)
    {
        $this->PackagingDescription = $packagingDescription;
        return $this;
    }
    
    /**
     * Information about the routing, origin, destination and delivery of a shipment.
     *
     * @param ShipmentRoutingDetail $RoutingDetail
     * return FedEx_ShipService_CompletedShipmentDetail
     */
    public function setRoutingDetail(FedEx_ShipService_ShipmentRoutingDetail $routingDetail)
    {
        $this->RoutingDetail = $routingDetail;
        return $this;
    }
    
    /**
     * Only used with pending shipments.
     *
     * @param PendingShipmentAccessDetail $AccessDetail
     * return FedEx_ShipService_CompletedShipmentDetail
     */
    public function setAccessDetail(FedEx_ShipService_PendingShipmentAccessDetail $accessDetail)
    {
        $this->AccessDetail = $accessDetail;
        return $this;
    }
    
    /**
     * Only used in the reply to tag requests.
     *
     * @param CompletedTagDetail $TagDetail
     * return FedEx_ShipService_CompletedShipmentDetail
     */
    public function setTagDetail(FedEx_ShipService_CompletedTagDetail $tagDetail)
    {
        $this->TagDetail = $tagDetail;
        return $this;
    }
    
    /**
     * Provides reply information specific to SmartPost shipments.
     *
     * @param CompletedSmartPostDetail $SmartPostDetail
     * return FedEx_ShipService_CompletedShipmentDetail
     */
    public function setSmartPostDetail(FedEx_ShipService_CompletedSmartPostDetail $smartPostDetail)
    {
        $this->SmartPostDetail = $smartPostDetail;
        return $this;
    }
    
    /**
     * All shipment-level rating data for this shipment, which may include data for multiple rate types.
     *
     * @param ShipmentRating $ShipmentRating
     * return FedEx_ShipService_CompletedShipmentDetail
     */
    public function setShipmentRating(FedEx_ShipService_ShipmentRating $shipmentRating)
    {
        $this->ShipmentRating = $shipmentRating;
        return $this;
    }
    
    /**
     * Information about the COD return shipment.
     *
     * @param CodReturnShipmentDetail $CodReturnDetail
     * return FedEx_ShipService_CompletedShipmentDetail
     */
    public function setCodReturnDetail(FedEx_ShipService_CodReturnShipmentDetail $codReturnDetail)
    {
        $this->CodReturnDetail = $codReturnDetail;
        return $this;
    }
    
    /**
     * Returns the default holding location information when HOLD_AT_LOCATION special service is requested and the client does not specify the hold location address.
     *
     * @param CompletedHoldAtLocationDetail $CompletedHoldAtLocationDetail
     * return FedEx_ShipService_CompletedShipmentDetail
     */
    public function setCompletedHoldAtLocationDetail(FedEx_ShipService_CompletedHoldAtLocationDetail $completedHoldAtLocationDetail)
    {
        $this->CompletedHoldAtLocationDetail = $completedHoldAtLocationDetail;
        return $this;
    }
    
    /**
     * Indicates whether or not this shipment is eligible for a money back guarantee.
     *
     * @param boolean $IneligibleForMoneyBackGuarantee
     * return FedEx_ShipService_CompletedShipmentDetail
     */
    public function setIneligibleForMoneyBackGuarantee($ineligibleForMoneyBackGuarantee)
    {
        $this->IneligibleForMoneyBackGuarantee = $ineligibleForMoneyBackGuarantee;
        return $this;
    }
    
    /**
     * Returns any defaults or updates applied to RequestedShipment.exportDetail.exportComplianceStatement.
     *
     * @param string $ExportComplianceStatement
     * return FedEx_ShipService_CompletedShipmentDetail
     */
    public function setExportComplianceStatement($exportComplianceStatement)
    {
        $this->ExportComplianceStatement = $exportComplianceStatement;
        return $this;
    }
    
    /**
     * 
     *
     * @param CompletedEtdDetail $CompletedEtdDetail
     * return FedEx_ShipService_CompletedShipmentDetail
     */
    public function setCompletedEtdDetail(FedEx_ShipService_CompletedEtdDetail $completedEtdDetail)
    {
        $this->CompletedEtdDetail = $completedEtdDetail;
        return $this;
    }
    
    /**
     * All shipment-level shipping documents (other than labels and barcodes).
     *
     * @param array[ShippingDocument] $ShipmentDocuments
     * return FedEx_ShipService_CompletedShipmentDetail
     */
    public function setShipmentDocuments(array $shipmentDocuments)
    {
        $this->ShipmentDocuments = $shipmentDocuments;
        return $this;
    }
    
    /**
     * Package level details about this package.
     *
     * @param array[CompletedPackageDetail] $CompletedPackageDetails
     * return FedEx_ShipService_CompletedShipmentDetail
     */
    public function setCompletedPackageDetails(array $completedPackageDetails)
    {
        $this->CompletedPackageDetails = $completedPackageDetails;
        return $this;
    }
    

    
}