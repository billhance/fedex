<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Description of shipping label to be returned in the reply
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_LabelSpecification
    extends FedEx_AbstractComplexType
{

    /**
     * Specify type of label to be returned
     *
     * @param LabelFormatType $LabelFormatType
     * return FedEx_RateService_LabelSpecification
     */
    public function setLabelFormatType(FedEx_RateService_LabelFormatType $labelFormatType)
    {
        $this->LabelFormatType = $labelFormatType;
        return $this;
    }
    
    /**
     * 
                The type of image or printer commands the label is to be formatted in.
                DPL = Unimark thermal printer language
                EPL2 = Eltron thermal printer language
                PDF = a label returned as a pdf image
                PNG = a label returned as a png image
                ZPLII = Zebra thermal printer language
              
     *
     * @param ShippingDocumentImageType $ImageType
     * return FedEx_RateService_LabelSpecification
     */
    public function setImageType(FedEx_RateService_ShippingDocumentImageType $imageType)
    {
        $this->ImageType = $imageType;
        return $this;
    }
    
    /**
     * For thermal printer lables this indicates the size of the label and the location of the doc tab if present.
     *
     * @param LabelStockType $LabelStockType
     * return FedEx_RateService_LabelSpecification
     */
    public function setLabelStockType(FedEx_RateService_LabelStockType $labelStockType)
    {
        $this->LabelStockType = $labelStockType;
        return $this;
    }
    
    /**
     * This indicates if the top or bottom of the label comes out of the printer first.
     *
     * @param LabelPrintingOrientationType $LabelPrintingOrientation
     * return FedEx_RateService_LabelSpecification
     */
    public function setLabelPrintingOrientation(FedEx_RateService_LabelPrintingOrientationType $labelPrintingOrientation)
    {
        $this->LabelPrintingOrientation = $labelPrintingOrientation;
        return $this;
    }
    
    /**
     * Relative to normal orientation for the printer. RIGHT=90 degrees clockwise, UPSIDE_DOWN=180 degrees, LEFT=90 degrees counterclockwise.
     *
     * @param LabelRotationType $LabelRotation
     * return FedEx_RateService_LabelSpecification
     */
    public function setLabelRotation(FedEx_RateService_LabelRotationType $labelRotation)
    {
        $this->LabelRotation = $labelRotation;
        return $this;
    }
    
    /**
     * If present, this contact and address information will replace the return address information on the label.
     *
     * @param ContactAndAddress $PrintedLabelOrigin
     * return FedEx_RateService_LabelSpecification
     */
    public function setPrintedLabelOrigin(FedEx_RateService_ContactAndAddress $printedLabelOrigin)
    {
        $this->PrintedLabelOrigin = $printedLabelOrigin;
        return $this;
    }
    
    /**
     * Allows customer-specified control of label content.
     *
     * @param CustomerSpecifiedLabelDetail $CustomerSpecifiedDetail
     * return FedEx_RateService_LabelSpecification
     */
    public function setCustomerSpecifiedDetail(FedEx_RateService_CustomerSpecifiedLabelDetail $customerSpecifiedDetail)
    {
        $this->CustomerSpecifiedDetail = $customerSpecifiedDetail;
        return $this;
    }
    

    
}