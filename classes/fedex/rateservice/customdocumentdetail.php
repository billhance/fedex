<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Data required to produce a custom-specified document, either at shipment or package level.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_CustomDocumentDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Common information controlling document production.
     *
     * @param ShippingDocumentFormat $Format
     * return FedEx_RateService_CustomDocumentDetail
     */
    public function setFormat(FedEx_RateService_ShippingDocumentFormat $format)
    {
        $this->Format = $format;
        return $this;
    }
    
    /**
     * Applicable only to documents produced on thermal printers with roll stock.
     *
     * @param LabelPrintingOrientationType $LabelPrintingOrientation
     * return FedEx_RateService_CustomDocumentDetail
     */
    public function setLabelPrintingOrientation(FedEx_RateService_LabelPrintingOrientationType $labelPrintingOrientation)
    {
        $this->LabelPrintingOrientation = $labelPrintingOrientation;
        return $this;
    }
    
    /**
     * Applicable only to documents produced on thermal printers with roll stock.
     *
     * @param LabelRotationType $LabelRotation
     * return FedEx_RateService_CustomDocumentDetail
     */
    public function setLabelRotation(FedEx_RateService_LabelRotationType $labelRotation)
    {
        $this->LabelRotation = $labelRotation;
        return $this;
    }
    
    /**
     * Identifies the formatting specification used to construct this custom document.
     *
     * @param string $SpecificationId
     * return FedEx_RateService_CustomDocumentDetail
     */
    public function setSpecificationId($specificationId)
    {
        $this->SpecificationId = $specificationId;
        return $this;
    }
    

    
}