<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Specifies characteristics of a shipping document to be produced.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_ShippingDocumentFormat
    extends FedEx_AbstractComplexType
{

    /**
     * Specifies how to create, organize, and return the document.
     *
     * @param array[ShippingDocumentDispositionDetail] $Dispositions
     * return FedEx_ShipService_ShippingDocumentFormat
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
     * return FedEx_ShipService_ShippingDocumentFormat
     */
    public function setTopOfPageOffset(FedEx_ShipService_LinearMeasure $topOfPageOffset)
    {
        $this->TopOfPageOffset = $topOfPageOffset;
        return $this;
    }
    
    /**
     * 
     *
     * @param ShippingDocumentImageType $ImageType
     * return FedEx_ShipService_ShippingDocumentFormat
     */
    public function setImageType(FedEx_ShipService_ShippingDocumentImageType $imageType)
    {
        $this->ImageType = $imageType;
        return $this;
    }
    
    /**
     * 
     *
     * @param ShippingDocumentStockType $StockType
     * return FedEx_ShipService_ShippingDocumentFormat
     */
    public function setStockType(FedEx_ShipService_ShippingDocumentStockType $stockType)
    {
        $this->StockType = $stockType;
        return $this;
    }
    
    /**
     * For those shipping document types which have both a "form" and "instructions" component (e.g. NAFTA Certificate of Origin and General Agency Agreement), this field indicates whether to provide the instructions.
     *
     * @param boolean $ProvideInstructions
     * return FedEx_ShipService_ShippingDocumentFormat
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
     * return FedEx_ShipService_ShippingDocumentFormat
     */
    public function setLocalization(FedEx_ShipService_Localization $localization)
    {
        $this->Localization = $localization;
        return $this;
    }
    
    /**
     * Identifies the individual document specified by the client.
     *
     * @param string $CustomDocumentIdentifier
     * return FedEx_ShipService_ShippingDocumentFormat
     */
    public function setCustomDocumentIdentifier($customDocumentIdentifier)
    {
        $this->CustomDocumentIdentifier = $customDocumentIdentifier;
        return $this;
    }
    

    
}