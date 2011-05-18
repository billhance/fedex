<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_CustomsClearanceDetail
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param Party $Broker
     * return FedEx_ShipService_CustomsClearanceDetail
     */
    public function setBroker(FedEx_ShipService_Party $broker)
    {
        $this->Broker = $broker;
        return $this;
    }
    
    /**
     * Interacts both with properties of the shipment and contractual relationship with the shipper.
     *
     * @param ClearanceBrokerageType $ClearanceBrokerage
     * return FedEx_ShipService_CustomsClearanceDetail
     */
    public function setClearanceBrokerage(FedEx_ShipService_ClearanceBrokerageType $clearanceBrokerage)
    {
        $this->ClearanceBrokerage = $clearanceBrokerage;
        return $this;
    }
    
    /**
     * 
     *
     * @param Party $ImporterOfRecord
     * return FedEx_ShipService_CustomsClearanceDetail
     */
    public function setImporterOfRecord(FedEx_ShipService_Party $importerOfRecord)
    {
        $this->ImporterOfRecord = $importerOfRecord;
        return $this;
    }
    
    /**
     * Specifies how the recipient is identified for customs purposes; the requirements on this information vary with destination country.
     *
     * @param RecipientCustomsId $RecipientCustomsId
     * return FedEx_ShipService_CustomsClearanceDetail
     */
    public function setRecipientCustomsId(FedEx_ShipService_RecipientCustomsId $recipientCustomsId)
    {
        $this->RecipientCustomsId = $recipientCustomsId;
        return $this;
    }
    
    /**
     * 
     *
     * @param Payment $DutiesPayment
     * return FedEx_ShipService_CustomsClearanceDetail
     */
    public function setDutiesPayment(FedEx_ShipService_Payment $dutiesPayment)
    {
        $this->DutiesPayment = $dutiesPayment;
        return $this;
    }
    
    /**
     * 
     *
     * @param InternationalDocumentContentType $DocumentContent
     * return FedEx_ShipService_CustomsClearanceDetail
     */
    public function setDocumentContent(FedEx_ShipService_InternationalDocumentContentType $documentContent)
    {
        $this->DocumentContent = $documentContent;
        return $this;
    }
    
    /**
     * 
     *
     * @param Money $CustomsValue
     * return FedEx_ShipService_CustomsClearanceDetail
     */
    public function setCustomsValue(FedEx_ShipService_Money $customsValue)
    {
        $this->CustomsValue = $customsValue;
        return $this;
    }
    
    /**
     * Identifies responsibilities with respect to loss, damage, etc.
     *
     * @param FreightOnValueType $FreightOnValue
     * return FedEx_ShipService_CustomsClearanceDetail
     */
    public function setFreightOnValue(FedEx_ShipService_FreightOnValueType $freightOnValue)
    {
        $this->FreightOnValue = $freightOnValue;
        return $this;
    }
    
    /**
     * Documents amount paid to third party for coverage of shipment content.
     *
     * @param Money $InsuranceCharges
     * return FedEx_ShipService_CustomsClearanceDetail
     */
    public function setInsuranceCharges(FedEx_ShipService_Money $insuranceCharges)
    {
        $this->InsuranceCharges = $insuranceCharges;
        return $this;
    }
    
    /**
     * 
     *
     * @param boolean $PartiesToTransactionAreRelated
     * return FedEx_ShipService_CustomsClearanceDetail
     */
    public function setPartiesToTransactionAreRelated($partiesToTransactionAreRelated)
    {
        $this->PartiesToTransactionAreRelated = $partiesToTransactionAreRelated;
        return $this;
    }
    
    /**
     * 
     *
     * @param CommercialInvoice $CommercialInvoice
     * return FedEx_ShipService_CustomsClearanceDetail
     */
    public function setCommercialInvoice(FedEx_ShipService_CommercialInvoice $commercialInvoice)
    {
        $this->CommercialInvoice = $commercialInvoice;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[Commodity] $Commodities
     * return FedEx_ShipService_CustomsClearanceDetail
     */
    public function setCommodities(array $commodities)
    {
        $this->Commodities = $commodities;
        return $this;
    }
    
    /**
     * 
     *
     * @param ExportDetail $ExportDetail
     * return FedEx_ShipService_CustomsClearanceDetail
     */
    public function setExportDetail(FedEx_ShipService_ExportDetail $exportDetail)
    {
        $this->ExportDetail = $exportDetail;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[RegulatoryControlType] $RegulatoryControls
     * return FedEx_ShipService_CustomsClearanceDetail
     */
    public function setRegulatoryControls(array $regulatoryControls)
    {
        $this->RegulatoryControls = $regulatoryControls;
        return $this;
    }
    

    
}