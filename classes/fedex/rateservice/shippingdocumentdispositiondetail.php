<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Each occurrence of this class specifies a particular way in which a kind of shipping document is to be produced and provided.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_ShippingDocumentDispositionDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Values in this field specify how to create and return the document.
     *
     * @param ShippingDocumentDispositionType $DispositionType
     * return FedEx_RateService_ShippingDocumentDispositionDetail
     */
    public function setDispositionType(FedEx_RateService_ShippingDocumentDispositionType $dispositionType)
    {
        $this->DispositionType = $dispositionType;
        return $this;
    }
    
    /**
     * Specifies how to organize all documents of this type.
     *
     * @param ShippingDocumentGroupingType $Grouping
     * return FedEx_RateService_ShippingDocumentDispositionDetail
     */
    public function setGrouping(FedEx_RateService_ShippingDocumentGroupingType $grouping)
    {
        $this->Grouping = $grouping;
        return $this;
    }
    
    /**
     * Specifies how to e-mail document images.
     *
     * @param ShippingDocumentEMailDetail $EMailDetail
     * return FedEx_RateService_ShippingDocumentDispositionDetail
     */
    public function setEMailDetail(FedEx_RateService_ShippingDocumentEMailDetail $eMailDetail)
    {
        $this->EMailDetail = $eMailDetail;
        return $this;
    }
    
    /**
     * Specifies how a queued document is to be printed.
     *
     * @param ShippingDocumentPrintDetail $PrintDetail
     * return FedEx_RateService_ShippingDocumentDispositionDetail
     */
    public function setPrintDetail(FedEx_RateService_ShippingDocumentPrintDetail $printDetail)
    {
        $this->PrintDetail = $printDetail;
        return $this;
    }
    

    
}