<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Description of shipping label to be returned in the reply
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_LabelSpecification
    extends FedEx_AbstractComplexType
{

    /**
     * Specifies how to create, organize, and return the document.
     *
     * @param array[ShippingDocumentDispositionDetail] $Dispositions
     * return FedEx_ShipService_LabelSpecification
     */
    public function setDispositions(array $dispositions)
    {
        $this->Dispositions = $dispositions;
        return $this;
    }
    
    /**
     * Specify type of label to be returned
     *
     * @param LabelFormatType $LabelFormatType
     * return FedEx_ShipService_LabelSpecification
     */
    public function setLabelFormatType(FedEx_ShipService_LabelFormatType $labelFormatType)
    {
        $this->LabelFormatType = $labelFormatType;
        return $this;
    }
    
    /**
     * Specifies the image format used for a shipping document.
     *
     * @param ShippingDocumentImageType $ImageType
     * return FedEx_ShipService_LabelSpecification
     */
    public function setImageType(FedEx_ShipService_ShippingDocumentImageType $imageType)
    {
        $this->ImageType = $imageType;
        return $this;
    }
    
    /**
     * For thermal printer lables this indicates the size of the label and the location of the doc tab if present.
     *
     * @param LabelStockType $LabelStockType
     * return FedEx_ShipService_LabelSpecification
     */
    public function setLabelStockType(FedEx_ShipService_LabelStockType $labelStockType)
    {
        $this->LabelStockType = $labelStockType;
        return $this;
    }
    
    /**
     * This indicates if the top or bottom of the label comes out of the printer first.
     *
     * @param LabelPrintingOrientationType $LabelPrintingOrientation
     * return FedEx_ShipService_LabelSpecification
     */
    public function setLabelPrintingOrientation(FedEx_ShipService_LabelPrintingOrientationType $labelPrintingOrientation)
    {
        $this->LabelPrintingOrientation = $labelPrintingOrientation;
        return $this;
    }
    
    /**
     * If present, this contact and address information will replace the return address information on the label.
     *
     * @param ContactAndAddress $PrintedLabelOrigin
     * return FedEx_ShipService_LabelSpecification
     */
    public function setPrintedLabelOrigin(FedEx_ShipService_ContactAndAddress $printedLabelOrigin)
    {
        $this->PrintedLabelOrigin = $printedLabelOrigin;
        return $this;
    }
    
    /**
     * Allows customer-specified control of label content.
     *
     * @param CustomerSpecifiedLabelDetail $CustomerSpecifiedDetail
     * return FedEx_ShipService_LabelSpecification
     */
    public function setCustomerSpecifiedDetail(FedEx_ShipService_CustomerSpecifiedLabelDetail $customerSpecifiedDetail)
    {
        $this->CustomerSpecifiedDetail = $customerSpecifiedDetail;
        return $this;
    }
    

    
}