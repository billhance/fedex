<?php defined('SYSPATH') or die('No direct script access.');

/**
 * All package-level shipping documents (other than labels and barcodes).
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_ShippingDocument
    extends FedEx_AbstractComplexType
{

    /**
     * Shipping Document Type
     *
     * @param ReturnedShippingDocumentType $Type
     * return FedEx_ShipService_ShippingDocument
     */
    public function setType(FedEx_ShipService_ReturnedShippingDocumentType $type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Specifies how this document image/file is organized.
     *
     * @param ShippingDocumentGroupingType $Grouping
     * return FedEx_ShipService_ShippingDocument
     */
    public function setGrouping(FedEx_ShipService_ShippingDocumentGroupingType $grouping)
    {
        $this->Grouping = $grouping;
        return $this;
    }
    
    /**
     * 
     *
     * @param ShippingDocumentDispositionType $ShippingDocumentDisposition
     * return FedEx_ShipService_ShippingDocument
     */
    public function setShippingDocumentDisposition(FedEx_ShipService_ShippingDocumentDispositionType $shippingDocumentDisposition)
    {
        $this->ShippingDocumentDisposition = $shippingDocumentDisposition;
        return $this;
    }
    
    /**
     * The name under which a STORED or DEFERRED document is written.
     *
     * @param string $AccessReference
     * return FedEx_ShipService_ShippingDocument
     */
    public function setAccessReference($accessReference)
    {
        $this->AccessReference = $accessReference;
        return $this;
    }
    
    /**
     * Specifies the image resolution in DPI (dots per inch).
     *
     * @param nonNegativeInteger $Resolution
     * return FedEx_ShipService_ShippingDocument
     */
    public function setResolution($resolution)
    {
        $this->Resolution = $resolution;
        return $this;
    }
    
    /**
     * Can be zero for documents whose disposition implies that no content is included.
     *
     * @param nonNegativeInteger $CopiesToPrint
     * return FedEx_ShipService_ShippingDocument
     */
    public function setCopiesToPrint($copiesToPrint)
    {
        $this->CopiesToPrint = $copiesToPrint;
        return $this;
    }
    
    /**
     * One or more document parts which make up a single logical document, such as multiple pages of a single form.
     *
     * @param array[ShippingDocumentPart] $Parts
     * return FedEx_ShipService_ShippingDocument
     */
    public function setParts(array $parts)
    {
        $this->Parts = $parts;
        return $this;
    }
    

    
}