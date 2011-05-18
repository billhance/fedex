<?php defined('SYSPATH') or die('No direct script access.');

/**
 * These special services are available at the shipment level for some or all service types. If the shipper is requesting a special service which requires additional data (such as the COD amount), the shipment special service type must be present in the specialServiceTypes collection, and the supporting detail must be provided in the appropriate sub-object below.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_ShipmentSpecialServicesRequested
    extends FedEx_AbstractComplexType
{

    /**
     * The types of all special services requested for the enclosing shipment (or other shipment-level transaction).
     *
     * @param array[ShipmentSpecialServiceType] $SpecialServiceTypes
     * return FedEx_ShipService_ShipmentSpecialServicesRequested
     */
    public function setSpecialServiceTypes(array $specialServiceTypes)
    {
        $this->SpecialServiceTypes = $specialServiceTypes;
        return $this;
    }
    
    /**
     * Descriptive data required for a FedEx COD (Collect-On-Delivery) shipment. This element is required when SpecialServiceType.COD is present in the SpecialServiceTypes collection.
     *
     * @param CodDetail $CodDetail
     * return FedEx_ShipService_ShipmentSpecialServicesRequested
     */
    public function setCodDetail(FedEx_ShipService_CodDetail $codDetail)
    {
        $this->CodDetail = $codDetail;
        return $this;
    }
    
    /**
     * Descriptive data required for a FedEx shipment that is to be held at the destination FedEx location for pickup by the recipient. This element is required when SpecialServiceType.HOLD_AT_LOCATION is present in the SpecialServiceTypes collection.
     *
     * @param HoldAtLocationDetail $HoldAtLocationDetail
     * return FedEx_ShipService_ShipmentSpecialServicesRequested
     */
    public function setHoldAtLocationDetail(FedEx_ShipService_HoldAtLocationDetail $holdAtLocationDetail)
    {
        $this->HoldAtLocationDetail = $holdAtLocationDetail;
        return $this;
    }
    
    /**
     * Descriptive data required for FedEx to provide email notification to the customer regarding the shipment. This element is required when SpecialServiceType.EMAIL_NOTIFICATION is present in the SpecialServiceTypes collection.
     *
     * @param EMailNotificationDetail $EMailNotificationDetail
     * return FedEx_ShipService_ShipmentSpecialServicesRequested
     */
    public function setEMailNotificationDetail(FedEx_ShipService_EMailNotificationDetail $eMailNotificationDetail)
    {
        $this->EMailNotificationDetail = $eMailNotificationDetail;
        return $this;
    }
    
    /**
     * The descriptive data required for FedEx Printed Return Label. This element is required when SpecialServiceType.PRINTED_RETURN_LABEL is present in the SpecialServiceTypes collection
     *
     * @param ReturnShipmentDetail $ReturnShipmentDetail
     * return FedEx_ShipService_ShipmentSpecialServicesRequested
     */
    public function setReturnShipmentDetail(FedEx_ShipService_ReturnShipmentDetail $returnShipmentDetail)
    {
        $this->ReturnShipmentDetail = $returnShipmentDetail;
        return $this;
    }
    
    /**
     * This field should be populated for pending shipments (e.g. e-mail label) It is required by a PENDING_SHIPMENT special service type.
     *
     * @param PendingShipmentDetail $PendingShipmentDetail
     * return FedEx_ShipService_ShipmentSpecialServicesRequested
     */
    public function setPendingShipmentDetail(FedEx_ShipService_PendingShipmentDetail $pendingShipmentDetail)
    {
        $this->PendingShipmentDetail = $pendingShipmentDetail;
        return $this;
    }
    
    /**
     * Number of packages in this shipment which contain dry ice and the total weight of the dry ice for this shipment.
     *
     * @param ShipmentDryIceDetail $ShipmentDryIceDetail
     * return FedEx_ShipService_ShipmentSpecialServicesRequested
     */
    public function setShipmentDryIceDetail(FedEx_ShipService_ShipmentDryIceDetail $shipmentDryIceDetail)
    {
        $this->ShipmentDryIceDetail = $shipmentDryIceDetail;
        return $this;
    }
    
    /**
     * The descriptive data required for FedEx Home Delivery options. This element is required when SpecialServiceType.HOME_DELIVERY_PREMIUM is present in the SpecialServiceTypes collection
     *
     * @param HomeDeliveryPremiumDetail $HomeDeliveryPremiumDetail
     * return FedEx_ShipService_ShipmentSpecialServicesRequested
     */
    public function setHomeDeliveryPremiumDetail(FedEx_ShipService_HomeDeliveryPremiumDetail $homeDeliveryPremiumDetail)
    {
        $this->HomeDeliveryPremiumDetail = $homeDeliveryPremiumDetail;
        return $this;
    }
    
    /**
     * Electronic Trade document references.
     *
     * @param EtdDetail $EtdDetail
     * return FedEx_ShipService_ShipmentSpecialServicesRequested
     */
    public function setEtdDetail(FedEx_ShipService_EtdDetail $etdDetail)
    {
        $this->EtdDetail = $etdDetail;
        return $this;
    }
    
    /**
     * Specification for date or range of dates on which delivery is to be attempted.
     *
     * @param CustomDeliveryWindowDetail $CustomDeliveryWindowDetail
     * return FedEx_ShipService_ShipmentSpecialServicesRequested
     */
    public function setCustomDeliveryWindowDetail(FedEx_ShipService_CustomDeliveryWindowDetail $customDeliveryWindowDetail)
    {
        $this->CustomDeliveryWindowDetail = $customDeliveryWindowDetail;
        return $this;
    }
    

    
}