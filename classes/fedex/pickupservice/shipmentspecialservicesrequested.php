<?php defined('SYSPATH') or die('No direct script access.');

/**
 * These special services are available at the shipment level for some or all service types. If the shipper is requesting a special service which requires additional data (such as the COD amount), the shipment special service type must be present in the specialServiceTypes collection, and the supporting detail must be provided in the appropriate sub-object below.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PickupService_ShipmentSpecialServicesRequested
    extends FedEx_AbstractComplexType
{

    /**
     * The types of all special services requested for the enclosing shipment (or other shipment-level transaction).
     *
     * @param array[ShipmentSpecialServiceType] $SpecialServiceTypes
     * return FedEx_PickupService_ShipmentSpecialServicesRequested
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
     * return FedEx_PickupService_ShipmentSpecialServicesRequested
     */
    public function setCodDetail(FedEx_PickupService_CodDetail $codDetail)
    {
        $this->CodDetail = $codDetail;
        return $this;
    }
    
    /**
     * Descriptive data required for a FedEx shipment that is to be held at the destination FedEx location for pickup by the recipient. This element is required when SpecialServiceType.HOLD_AT_LOCATION is present in the SpecialServiceTypes collection.
     *
     * @param HoldAtLocationDetail $HoldAtLocationDetail
     * return FedEx_PickupService_ShipmentSpecialServicesRequested
     */
    public function setHoldAtLocationDetail(FedEx_PickupService_HoldAtLocationDetail $holdAtLocationDetail)
    {
        $this->HoldAtLocationDetail = $holdAtLocationDetail;
        return $this;
    }
    
    /**
     * Descriptive data required for FedEx to provide email notification to the customer regarding the shipment. This element is required when SpecialServiceType.EMAIL_NOTIFICATION is present in the SpecialServiceTypes collection.
     *
     * @param EMailNotificationDetail $EMailNotificationDetail
     * return FedEx_PickupService_ShipmentSpecialServicesRequested
     */
    public function setEMailNotificationDetail(FedEx_PickupService_EMailNotificationDetail $eMailNotificationDetail)
    {
        $this->EMailNotificationDetail = $eMailNotificationDetail;
        return $this;
    }
    
    /**
     * The descriptive data required for FedEx Printed Return Label. This element is required when SpecialServiceType.PRINTED_RETURN_LABEL is present in the SpecialServiceTypes collection
     *
     * @param ReturnShipmentDetail $ReturnShipmentDetail
     * return FedEx_PickupService_ShipmentSpecialServicesRequested
     */
    public function setReturnShipmentDetail(FedEx_PickupService_ReturnShipmentDetail $returnShipmentDetail)
    {
        $this->ReturnShipmentDetail = $returnShipmentDetail;
        return $this;
    }
    
    /**
     * This field should be populated for pending shipments (e.g. e-mail label) It is required by a PENDING_SHIPMENT special service type.
     *
     * @param PendingShipmentDetail $PendingShipmentDetail
     * return FedEx_PickupService_ShipmentSpecialServicesRequested
     */
    public function setPendingShipmentDetail(FedEx_PickupService_PendingShipmentDetail $pendingShipmentDetail)
    {
        $this->PendingShipmentDetail = $pendingShipmentDetail;
        return $this;
    }
    
    /**
     * 
     *
     * @param InternationalControlledExportDetail $InternationalControlledExportDetail
     * return FedEx_PickupService_ShipmentSpecialServicesRequested
     */
    public function setInternationalControlledExportDetail(FedEx_PickupService_InternationalControlledExportDetail $internationalControlledExportDetail)
    {
        $this->InternationalControlledExportDetail = $internationalControlledExportDetail;
        return $this;
    }
    
    /**
     * INTERNAL FEDEX USE ONLY
     *
     * @param TransborderDistributionDetail $TransborderDistributionDetail
     * return FedEx_PickupService_ShipmentSpecialServicesRequested
     */
    public function setTransborderDistributionDetail(FedEx_PickupService_TransborderDistributionDetail $transborderDistributionDetail)
    {
        $this->TransborderDistributionDetail = $transborderDistributionDetail;
        return $this;
    }
    
    /**
     * INTERNAL FEDEX USE ONLY
     *
     * @param TransborderDistributionMasterDetail $TransborderDistributionMasterDetail
     * return FedEx_PickupService_ShipmentSpecialServicesRequested
     */
    public function setTransborderDistributionMasterDetail(FedEx_PickupService_TransborderDistributionMasterDetail $transborderDistributionMasterDetail)
    {
        $this->TransborderDistributionMasterDetail = $transborderDistributionMasterDetail;
        return $this;
    }
    
    /**
     * Number of packages in this shipment which contain dry ice and the total weight of the dry ice for this shipment.
     *
     * @param ShipmentDryIceDetail $ShipmentDryIceDetail
     * return FedEx_PickupService_ShipmentSpecialServicesRequested
     */
    public function setShipmentDryIceDetail(FedEx_PickupService_ShipmentDryIceDetail $shipmentDryIceDetail)
    {
        $this->ShipmentDryIceDetail = $shipmentDryIceDetail;
        return $this;
    }
    
    /**
     * The descriptive data required for FedEx Home Delivery options. This element is required when SpecialServiceType.HOME_DELIVERY_PREMIUM is present in the SpecialServiceTypes collection
     *
     * @param HomeDeliveryPremiumDetail $HomeDeliveryPremiumDetail
     * return FedEx_PickupService_ShipmentSpecialServicesRequested
     */
    public function setHomeDeliveryPremiumDetail(FedEx_PickupService_HomeDeliveryPremiumDetail $homeDeliveryPremiumDetail)
    {
        $this->HomeDeliveryPremiumDetail = $homeDeliveryPremiumDetail;
        return $this;
    }
    
    /**
     * Identifies the delivery guarantee information.
     *
     * @param FlatbedTrailerDetail $FlatbedTrailerDetail
     * return FedEx_PickupService_ShipmentSpecialServicesRequested
     */
    public function setFlatbedTrailerDetail(FedEx_PickupService_FlatbedTrailerDetail $flatbedTrailerDetail)
    {
        $this->FlatbedTrailerDetail = $flatbedTrailerDetail;
        return $this;
    }
    
    /**
     * Electronic Trade document references.
     *
     * @param EtdDetail $EtdDetail
     * return FedEx_PickupService_ShipmentSpecialServicesRequested
     */
    public function setEtdDetail(FedEx_PickupService_EtdDetail $etdDetail)
    {
        $this->EtdDetail = $etdDetail;
        return $this;
    }
    
    /**
     * Specification for labor to be performed with the shipment.
     *
     * @param ExtraLaborDetail $ExtraLaborDetail
     * return FedEx_PickupService_ShipmentSpecialServicesRequested
     */
    public function setExtraLaborDetail(FedEx_PickupService_ExtraLaborDetail $extraLaborDetail)
    {
        $this->ExtraLaborDetail = $extraLaborDetail;
        return $this;
    }
    
    /**
     * Specifications for pallets to be shrinkwrapped as part of a Freight shipment.
     *
     * @param PalletShrinkwrapDetail $PalletShrinkwrapDetail
     * return FedEx_PickupService_ShipmentSpecialServicesRequested
     */
    public function setPalletShrinkwrapDetail(FedEx_PickupService_PalletShrinkwrapDetail $palletShrinkwrapDetail)
    {
        $this->PalletShrinkwrapDetail = $palletShrinkwrapDetail;
        return $this;
    }
    
    /**
     * Specifications for pallets to be provided on Freight shipment.
     *
     * @param PalletsProvidedDetail $PalletsProvidedDetail
     * return FedEx_PickupService_ShipmentSpecialServicesRequested
     */
    public function setPalletsProvidedDetail(FedEx_PickupService_PalletsProvidedDetail $palletsProvidedDetail)
    {
        $this->PalletsProvidedDetail = $palletsProvidedDetail;
        return $this;
    }
    
    /**
     * Specifications for pup/set or vehicle delayed for loading or unloading.
     *
     * @param DetentionDetail $DetentionDetail
     * return FedEx_PickupService_ShipmentSpecialServicesRequested
     */
    public function setDetentionDetail(FedEx_PickupService_DetentionDetail $detentionDetail)
    {
        $this->DetentionDetail = $detentionDetail;
        return $this;
    }
    
    /**
     * Specification for marking or tagging of pieces in shipment.
     *
     * @param MarkingOrTaggingDetail $MarkingOrTaggingDetail
     * return FedEx_PickupService_ShipmentSpecialServicesRequested
     */
    public function setMarkingOrTaggingDetail(FedEx_PickupService_MarkingOrTaggingDetail $markingOrTaggingDetail)
    {
        $this->MarkingOrTaggingDetail = $markingOrTaggingDetail;
        return $this;
    }
    
    /**
     * Specification for services performed during non-business hours and/or days.
     *
     * @param NonBusinessTimeDetail $NonBusinessTimeDetail
     * return FedEx_PickupService_ShipmentSpecialServicesRequested
     */
    public function setNonBusinessTimeDetail(FedEx_PickupService_NonBusinessTimeDetail $nonBusinessTimeDetail)
    {
        $this->NonBusinessTimeDetail = $nonBusinessTimeDetail;
        return $this;
    }
    
    /**
     * Specification for assembly performed on shipment.
     *
     * @param ShipmentAssemblyDetail $ShipmentAssemblyDetail
     * return FedEx_PickupService_ShipmentSpecialServicesRequested
     */
    public function setShipmentAssemblyDetail(FedEx_PickupService_ShipmentAssemblyDetail $shipmentAssemblyDetail)
    {
        $this->ShipmentAssemblyDetail = $shipmentAssemblyDetail;
        return $this;
    }
    
    /**
     * Specification for sorting and/or segregating performed on shipment.
     *
     * @param SortAndSegregateDetail $SortAndSegregateDetail
     * return FedEx_PickupService_ShipmentSpecialServicesRequested
     */
    public function setSortAndSegregateDetail(FedEx_PickupService_SortAndSegregateDetail $sortAndSegregateDetail)
    {
        $this->SortAndSegregateDetail = $sortAndSegregateDetail;
        return $this;
    }
    
    /**
     * Specification for special equipment used in loading/unloading shipment.
     *
     * @param SpecialEquipmentDetail $SpecialEquipmentDetail
     * return FedEx_PickupService_ShipmentSpecialServicesRequested
     */
    public function setSpecialEquipmentDetail(FedEx_PickupService_SpecialEquipmentDetail $specialEquipmentDetail)
    {
        $this->SpecialEquipmentDetail = $specialEquipmentDetail;
        return $this;
    }
    
    /**
     * Specification for storage provided for shipment.
     *
     * @param StorageDetail $StorageDetail
     * return FedEx_PickupService_ShipmentSpecialServicesRequested
     */
    public function setStorageDetail(FedEx_PickupService_StorageDetail $storageDetail)
    {
        $this->StorageDetail = $storageDetail;
        return $this;
    }
    
    /**
     * Specification for weighing services provided for shipment.
     *
     * @param WeighingDetail $WeighingDetail
     * return FedEx_PickupService_ShipmentSpecialServicesRequested
     */
    public function setWeighingDetail(FedEx_PickupService_WeighingDetail $weighingDetail)
    {
        $this->WeighingDetail = $weighingDetail;
        return $this;
    }
    
    /**
     * Specification for date or range of dates on which delivery is to be attempted.
     *
     * @param CustomDeliveryWindowDetail $CustomDeliveryWindowDetail
     * return FedEx_PickupService_ShipmentSpecialServicesRequested
     */
    public function setCustomDeliveryWindowDetail(FedEx_PickupService_CustomDeliveryWindowDetail $customDeliveryWindowDetail)
    {
        $this->CustomDeliveryWindowDetail = $customDeliveryWindowDetail;
        return $this;
    }
    

    
}