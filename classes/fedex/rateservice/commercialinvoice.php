<?php defined('SYSPATH') or die('No direct script access.');

/**
 * CommercialInvoice element is required for electronic upload of CI data. It will serve to create/transmit an Electronic Commercial Invoice through the FedEx Systems. Customers are responsible for printing their own Commercial Invoice.If you would likeFedEx to generate a Commercial Invoice and transmit it to Customs. for clearance purposes, you need to specify that in the ShippingDocumentSpecification element. If you would like a copy of the Commercial Invoice that FedEx generated returned to you in reply it needs to be specified in the ETDDetail/RequestedDocumentCopies element. Commercial Invoice support consists of maximum of 99 commodity line items.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_CommercialInvoice
    extends FedEx_AbstractComplexType
{

    /**
     * Any comments that need to be communicated about this shipment.
     *
     * @param array[string] $Comments
     * return FedEx_RateService_CommercialInvoice
     */
    public function setComments(array $comments)
    {
        $this->Comments = $comments;
        return $this;
    }
    
    /**
     * Any freight charges that are associated with this shipment.
     *
     * @param Money $FreightCharge
     * return FedEx_RateService_CommercialInvoice
     */
    public function setFreightCharge(FedEx_RateService_Money $freightCharge)
    {
        $this->FreightCharge = $freightCharge;
        return $this;
    }
    
    /**
     * Any taxes or miscellaneous charges(other than Freight charges or Insurance charges) that are associated with this shipment.
     *
     * @param Money $TaxesOrMiscellaneousCharge
     * return FedEx_RateService_CommercialInvoice
     */
    public function setTaxesOrMiscellaneousCharge(FedEx_RateService_Money $taxesOrMiscellaneousCharge)
    {
        $this->TaxesOrMiscellaneousCharge = $taxesOrMiscellaneousCharge;
        return $this;
    }
    
    /**
     * Any packing costs that are associated with this shipment.
     *
     * @param Money $PackingCosts
     * return FedEx_RateService_CommercialInvoice
     */
    public function setPackingCosts(FedEx_RateService_Money $packingCosts)
    {
        $this->PackingCosts = $packingCosts;
        return $this;
    }
    
    /**
     * Any handling costs that are associated with this shipment.
     *
     * @param Money $HandlingCosts
     * return FedEx_RateService_CommercialInvoice
     */
    public function setHandlingCosts(FedEx_RateService_Money $handlingCosts)
    {
        $this->HandlingCosts = $handlingCosts;
        return $this;
    }
    
    /**
     * Free-form text.
     *
     * @param string $SpecialInstructions
     * return FedEx_RateService_CommercialInvoice
     */
    public function setSpecialInstructions($specialInstructions)
    {
        $this->SpecialInstructions = $specialInstructions;
        return $this;
    }
    
    /**
     * Free-form text.
     *
     * @param string $DeclarationStatment
     * return FedEx_RateService_CommercialInvoice
     */
    public function setDeclarationStatment($declarationStatment)
    {
        $this->DeclarationStatment = $declarationStatment;
        return $this;
    }
    
    /**
     * Free-form text.
     *
     * @param string $PaymentTerms
     * return FedEx_RateService_CommercialInvoice
     */
    public function setPaymentTerms($paymentTerms)
    {
        $this->PaymentTerms = $paymentTerms;
        return $this;
    }
    
    /**
     * The reason for the shipment. Note: SOLD is not a valid purpose for a Proforma Invoice.
     *
     * @param PurposeOfShipmentType $Purpose
     * return FedEx_RateService_CommercialInvoice
     */
    public function setPurpose(FedEx_RateService_PurposeOfShipmentType $purpose)
    {
        $this->Purpose = $purpose;
        return $this;
    }
    
    /**
     * Descriptive text for the purpose of the shipment.
     *
     * @param string $PurposeOfShipmentDescription
     * return FedEx_RateService_CommercialInvoice
     */
    public function setPurposeOfShipmentDescription($purposeOfShipmentDescription)
    {
        $this->PurposeOfShipmentDescription = $purposeOfShipmentDescription;
        return $this;
    }
    
    /**
     * Customer assigned invoice number.
     *
     * @param string $CustomerInvoiceNumber
     * return FedEx_RateService_CommercialInvoice
     */
    public function setCustomerInvoiceNumber($customerInvoiceNumber)
    {
        $this->CustomerInvoiceNumber = $customerInvoiceNumber;
        return $this;
    }
    
    /**
     * Name of the International Expert that completed the Commercial Invoice different from Sender.
     *
     * @param string $OriginatorName
     * return FedEx_RateService_CommercialInvoice
     */
    public function setOriginatorName($originatorName)
    {
        $this->OriginatorName = $originatorName;
        return $this;
    }
    
    /**
     * Required for dutiable international Express or Ground shipment. This field is not applicable to an international PIB(document) or a non-document which does not require a Commercial Invoice.
     *
     * @param TermsOfSaleType $TermsOfSale
     * return FedEx_RateService_CommercialInvoice
     */
    public function setTermsOfSale(FedEx_RateService_TermsOfSaleType $termsOfSale)
    {
        $this->TermsOfSale = $termsOfSale;
        return $this;
    }
    

    
}