<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Data applicable to shipments using FEDEX_FREIGHT and FEDEX_NATIONAL_FREIGHT services.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_FreightShipmentDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Account number used with FEDEX_FREIGHT service.
     *
     * @param string $FedExFreightAccountNumber
     * return FedEx_ShipService_FreightShipmentDetail
     */
    public function setFedExFreightAccountNumber($fedExFreightAccountNumber)
    {
        $this->FedExFreightAccountNumber = $fedExFreightAccountNumber;
        return $this;
    }
    
    /**
     * Used for validating FedEx Freight account number and (optionally) identifying third party payment on the bill of lading.
     *
     * @param ContactAndAddress $FedExFreightBillingContactAndAddress
     * return FedEx_ShipService_FreightShipmentDetail
     */
    public function setFedExFreightBillingContactAndAddress(FedEx_ShipService_ContactAndAddress $fedExFreightBillingContactAndAddress)
    {
        $this->FedExFreightBillingContactAndAddress = $fedExFreightBillingContactAndAddress;
        return $this;
    }
    
    /**
     * Identification values to be printed during creation of a Freight bill of lading.
     *
     * @param array[PrintedReference] $PrintedReferences
     * return FedEx_ShipService_FreightShipmentDetail
     */
    public function setPrintedReferences(array $printedReferences)
    {
        $this->PrintedReferences = $printedReferences;
        return $this;
    }
    
    /**
     * Indicates the role of the party submitting the transaction.
     *
     * @param FreightShipmentRoleType $Role
     * return FedEx_ShipService_FreightShipmentDetail
     */
    public function setRole(FedEx_ShipService_FreightShipmentRoleType $role)
    {
        $this->Role = $role;
        return $this;
    }
    
    /**
     * Designates which of the requester's tariffs will be used for rating.
     *
     * @param FreightAccountPaymentType $PaymentType
     * return FedEx_ShipService_FreightShipmentDetail
     */
    public function setPaymentType(FedEx_ShipService_FreightAccountPaymentType $paymentType)
    {
        $this->PaymentType = $paymentType;
        return $this;
    }
    
    /**
     * Designates the terms of the "collect" payment for a Freight Shipment.
     *
     * @param FreightCollectTermsType $CollectTermsType
     * return FedEx_ShipService_FreightShipmentDetail
     */
    public function setCollectTermsType(FedEx_ShipService_FreightCollectTermsType $collectTermsType)
    {
        $this->CollectTermsType = $collectTermsType;
        return $this;
    }
    
    /**
     * Identifies the declared value for the shipment
     *
     * @param Money $DeclaredValuePerUnit
     * return FedEx_ShipService_FreightShipmentDetail
     */
    public function setDeclaredValuePerUnit(FedEx_ShipService_Money $declaredValuePerUnit)
    {
        $this->DeclaredValuePerUnit = $declaredValuePerUnit;
        return $this;
    }
    
    /**
     * Identifies the declared value units corresponding to the above defined declared value
     *
     * @param string $DeclaredValueUnits
     * return FedEx_ShipService_FreightShipmentDetail
     */
    public function setDeclaredValueUnits($declaredValueUnits)
    {
        $this->DeclaredValueUnits = $declaredValueUnits;
        return $this;
    }
    
    /**
     * 
     *
     * @param LiabilityCoverageDetail $LiabilityCoverageDetail
     * return FedEx_ShipService_FreightShipmentDetail
     */
    public function setLiabilityCoverageDetail(FedEx_ShipService_LiabilityCoverageDetail $liabilityCoverageDetail)
    {
        $this->LiabilityCoverageDetail = $liabilityCoverageDetail;
        return $this;
    }
    
    /**
     * Identifiers for promotional discounts offered to customers.
     *
     * @param array[string] $Coupons
     * return FedEx_ShipService_FreightShipmentDetail
     */
    public function setCoupons(array $coupons)
    {
        $this->Coupons = $coupons;
        return $this;
    }
    
    /**
     * Total number of individual handling units in the entire shipment (for unit pricing).
     *
     * @param nonNegativeInteger $TotalHandlingUnits
     * return FedEx_ShipService_FreightShipmentDetail
     */
    public function setTotalHandlingUnits($totalHandlingUnits)
    {
        $this->TotalHandlingUnits = $totalHandlingUnits;
        return $this;
    }
    
    /**
     * Estimated discount rate provided by client for unsecured rate quote.
     *
     * @param decimal $ClientDiscountPercent
     * return FedEx_ShipService_FreightShipmentDetail
     */
    public function setClientDiscountPercent($clientDiscountPercent)
    {
        $this->ClientDiscountPercent = $clientDiscountPercent;
        return $this;
    }
    
    /**
     * Total weight of pallets used in shipment.
     *
     * @param Weight $PalletWeight
     * return FedEx_ShipService_FreightShipmentDetail
     */
    public function setPalletWeight(FedEx_ShipService_Weight $palletWeight)
    {
        $this->PalletWeight = $palletWeight;
        return $this;
    }
    
    /**
     * Overall shipment dimensions.
     *
     * @param Dimensions $ShipmentDimensions
     * return FedEx_ShipService_FreightShipmentDetail
     */
    public function setShipmentDimensions(FedEx_ShipService_Dimensions $shipmentDimensions)
    {
        $this->ShipmentDimensions = $shipmentDimensions;
        return $this;
    }
    
    /**
     * Description for the shipment.
     *
     * @param string $Comment
     * return FedEx_ShipService_FreightShipmentDetail
     */
    public function setComment($comment)
    {
        $this->Comment = $comment;
        return $this;
    }
    
    /**
     * Specifies which party will pay surcharges for any special services which support split billing.
     *
     * @param array[FreightSpecialServicePayment] $SpecialServicePayments
     * return FedEx_ShipService_FreightShipmentDetail
     */
    public function setSpecialServicePayments(array $specialServicePayments)
    {
        $this->SpecialServicePayments = $specialServicePayments;
        return $this;
    }
    
    /**
     * Must be populated if any line items contain hazardous materials.
     *
     * @param string $HazardousMaterialsEmergencyContactNumber
     * return FedEx_ShipService_FreightShipmentDetail
     */
    public function setHazardousMaterialsEmergencyContactNumber($hazardousMaterialsEmergencyContactNumber)
    {
        $this->HazardousMaterialsEmergencyContactNumber = $hazardousMaterialsEmergencyContactNumber;
        return $this;
    }
    
    /**
     * Details of the commodities in the shipment.
     *
     * @param array[FreightShipmentLineItem] $LineItems
     * return FedEx_ShipService_FreightShipmentDetail
     */
    public function setLineItems(array $lineItems)
    {
        $this->LineItems = $lineItems;
        return $this;
    }
    

    
}