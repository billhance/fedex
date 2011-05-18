<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_InternationalDetail
    extends FedEx_AbstractComplexType
{

    /**
     * 
                Descriptive data identifying the Broker responsible for the shipmet.
                Required if BROKER_SELECT_OPTION is requested in Special Services.
              
     *
     * @param Party $Broker
     * return FedEx_RateService_InternationalDetail
     */
    public function setBroker(FedEx_RateService_Party $broker)
    {
        $this->Broker = $broker;
        return $this;
    }
    
    /**
     * 
                Interacts both with properties of the shipment and contractual relationship with
                the shipper.
              
     *
     * @param ClearanceBrokerageType $ClearanceBrokerage
     * return FedEx_RateService_InternationalDetail
     */
    public function setClearanceBrokerage(FedEx_RateService_ClearanceBrokerageType $clearanceBrokerage)
    {
        $this->ClearanceBrokerage = $clearanceBrokerage;
        return $this;
    }
    
    /**
     * 
                Applicable only for Commercial Invoice. If the consignee and importer are not the same, the Following importer fields are required.
                Importer/Contact/PersonName
                Importer/Contact/CompanyName
                Importer/Contact/PhoneNumber
                Importer/Address/StreetLine[0]
                Importer/Address/City
                Importer/Address/StateOrProvinceCode - if Importer Country Code is US or CA
                Importer/Address/PostalCode - if Importer Country Code is US or CA
                Importer/Address/CountryCode
              
     *
     * @param Party $ImporterOfRecord
     * return FedEx_RateService_InternationalDetail
     */
    public function setImporterOfRecord(FedEx_RateService_Party $importerOfRecord)
    {
        $this->ImporterOfRecord = $importerOfRecord;
        return $this;
    }
    
    /**
     * Type of Brazilian taxpayer identifier provided in Recipient/TaxPayerIdentification/Number. For shipments bound for Brazil this overrides the value in Recipient/TaxPayerIdentification/TinType
     *
     * @param RecipientCustomsIdType $RecipientCustomsIdType
     * return FedEx_RateService_InternationalDetail
     */
    public function setRecipientCustomsIdType(FedEx_RateService_RecipientCustomsIdType $recipientCustomsIdType)
    {
        $this->RecipientCustomsIdType = $recipientCustomsIdType;
        return $this;
    }
    
    /**
     * Indicates how payment of duties for the shipment will be made.
     *
     * @param Payment $DutiesPayment
     * return FedEx_RateService_InternationalDetail
     */
    public function setDutiesPayment(FedEx_RateService_Payment $dutiesPayment)
    {
        $this->DutiesPayment = $dutiesPayment;
        return $this;
    }
    
    /**
     * Indicates whether this shipment contains documents only or non-documents.
     *
     * @param InternationalDocumentContentType $DocumentContent
     * return FedEx_RateService_InternationalDetail
     */
    public function setDocumentContent(FedEx_RateService_InternationalDocumentContentType $documentContent)
    {
        $this->DocumentContent = $documentContent;
        return $this;
    }
    
    /**
     * The total customs value for the shipment. This total will rrepresent th esum of the values of all commodities, and may include freight, miscellaneous, and insurance charges. Must contain 2 explicit decimal positions with a max length of 17 including the decimal. For Express International MPS, the Total Customs Value is in the master transaction and all child transactions
     *
     * @param Money $CustomsValue
     * return FedEx_RateService_InternationalDetail
     */
    public function setCustomsValue(FedEx_RateService_Money $customsValue)
    {
        $this->CustomsValue = $customsValue;
        return $this;
    }
    
    /**
     * Documents amount paid to third party for coverage of shipment content.
     *
     * @param Money $InsuranceCharges
     * return FedEx_RateService_InternationalDetail
     */
    public function setInsuranceCharges(FedEx_RateService_Money $insuranceCharges)
    {
        $this->InsuranceCharges = $insuranceCharges;
        return $this;
    }
    
    /**
     * CommercialInvoice element is required for electronic upload of CI data. It will serve to create/transmit an Electronic Commercial Invoice through FedEx System. Customers are responsible for printing their own Commercial Invoice. Commercial Invoice support consists of a maximum of 20 commodity line items.
     *
     * @param CommercialInvoice $CommercialInvoice
     * return FedEx_RateService_InternationalDetail
     */
    public function setCommercialInvoice(FedEx_RateService_CommercialInvoice $commercialInvoice)
    {
        $this->CommercialInvoice = $commercialInvoice;
        return $this;
    }
    
    /**
     * 
                For international multiple piece shipments, commodity information must be passed in the Master and on each child transaction.
                If this shipment cotains more than four commodities line items, the four highest valued should be included in the first 4 occurances for this request.
              
     *
     * @param array[Commodity] $Commodities
     * return FedEx_RateService_InternationalDetail
     */
    public function setCommodities(array $commodities)
    {
        $this->Commodities = $commodities;
        return $this;
    }
    
    /**
     * Country specific details of an International shipment.
     *
     * @param ExportDetail $ExportDetail
     * return FedEx_RateService_InternationalDetail
     */
    public function setExportDetail(FedEx_RateService_ExportDetail $exportDetail)
    {
        $this->ExportDetail = $exportDetail;
        return $this;
    }
    
    /**
     * FOOD_OR_PERISHABLE is required by FDA/BTA; must be true for food/perishable items coming to US or PR from non-US/non-PR origin.
     *
     * @param array[RegulatoryControlType] $RegulatoryControls
     * return FedEx_RateService_InternationalDetail
     */
    public function setRegulatoryControls(array $regulatoryControls)
    {
        $this->RegulatoryControls = $regulatoryControls;
        return $this;
    }
    

    
}