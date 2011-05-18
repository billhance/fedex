<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Data required to produce a custom-specified document, either at shipment or package level.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_CustomDocumentDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Common information controlling document production.
     *
     * @param ShippingDocumentFormat $Format
     * return FedEx_ShipService_CustomDocumentDetail
     */
    public function setFormat(FedEx_ShipService_ShippingDocumentFormat $format)
    {
        $this->Format = $format;
        return $this;
    }
    
    /**
     * Applicable only to documents produced on thermal printers with roll stock.
     *
     * @param LabelPrintingOrientationType $LabelPrintingOrientation
     * return FedEx_ShipService_CustomDocumentDetail
     */
    public function setLabelPrintingOrientation(FedEx_ShipService_LabelPrintingOrientationType $labelPrintingOrientation)
    {
        $this->LabelPrintingOrientation = $labelPrintingOrientation;
        return $this;
    }
    
    /**
     * Applicable only to documents produced on thermal printers with roll stock.
     *
     * @param LabelRotationType $LabelRotation
     * return FedEx_ShipService_CustomDocumentDetail
     */
    public function setLabelRotation(FedEx_ShipService_LabelRotationType $labelRotation)
    {
        $this->LabelRotation = $labelRotation;
        return $this;
    }
    
    /**
     * Identifies the formatting specification used to construct this custom document.
     *
     * @param string $SpecificationId
     * return FedEx_ShipService_CustomDocumentDetail
     */
    public function setSpecificationId($specificationId)
    {
        $this->SpecificationId = $specificationId;
        return $this;
    }
    
    /**
     * Identifies the individual document specified by the client.
     *
     * @param string $CustomDocumentIdentifier
     * return FedEx_ShipService_CustomDocumentDetail
     */
    public function setCustomDocumentIdentifier($customDocumentIdentifier)
    {
        $this->CustomDocumentIdentifier = $customDocumentIdentifier;
        return $this;
    }
    
    /**
     * If provided, thermal documents will include specified doc tab content. If omitted, document will be produced without doc tab content.
     *
     * @param DocTabContent $DocTabContent
     * return FedEx_ShipService_CustomDocumentDetail
     */
    public function setDocTabContent(FedEx_ShipService_DocTabContent $docTabContent)
    {
        $this->DocTabContent = $docTabContent;
        return $this;
    }
    

    
}