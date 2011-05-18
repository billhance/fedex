<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Specifies characteristics of a shipping document to be produced.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_CloseService_CloseDocumentFormat
    extends FedEx_AbstractComplexType
{

    /**
     * Specifies how to create, organize, and return the document.
     *
     * @param array[ShippingDocumentDispositionDetail] $Dispositions
     * return FedEx_CloseService_CloseDocumentFormat
     */
    public function setDispositions(array $dispositions)
    {
        $this->Dispositions = $dispositions;
        return $this;
    }
    
    /**
     * Specifies how far down the page to move the beginning of the image; allows for printing on letterhead and other pre-printed stock.
     *
     * @param LinearMeasure $TopOfPageOffset
     * return FedEx_CloseService_CloseDocumentFormat
     */
    public function setTopOfPageOffset(FedEx_CloseService_LinearMeasure $topOfPageOffset)
    {
        $this->TopOfPageOffset = $topOfPageOffset;
        return $this;
    }
    
    /**
     * The type of image or printer commands the image is to be formatted in.
     *
     * @param ShippingDocumentImageType $ImageType
     * return FedEx_CloseService_CloseDocumentFormat
     */
    public function setImageType(FedEx_CloseService_ShippingDocumentImageType $imageType)
    {
        $this->ImageType = $imageType;
        return $this;
    }
    
    /**
     * 
     *
     * @param ShippingDocumentStockType $StockType
     * return FedEx_CloseService_CloseDocumentFormat
     */
    public function setStockType(FedEx_CloseService_ShippingDocumentStockType $stockType)
    {
        $this->StockType = $stockType;
        return $this;
    }
    
    /**
     * For those shipping document types which have both a "form" and "instructions" component (e.g. NAFTA Certificate of Origin and General Agency Agreement), this field indicates whether to provide the instructions.
     *
     * @param boolean $ProvideInstructions
     * return FedEx_CloseService_CloseDocumentFormat
     */
    public function setProvideInstructions($provideInstructions)
    {
        $this->ProvideInstructions = $provideInstructions;
        return $this;
    }
    
    /**
     * Governs the language to be used for this individual document, independently from other content returned for the same shipment.
     *
     * @param Localization $Localization
     * return FedEx_CloseService_CloseDocumentFormat
     */
    public function setLocalization(FedEx_CloseService_Localization $localization)
    {
        $this->Localization = $localization;
        return $this;
    }
    

    
}