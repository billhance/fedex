<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_CloseService_CloseDocument
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param CloseDocumentType $Type
     * return FedEx_CloseService_CloseDocument
     */
    public function setType(FedEx_CloseService_CloseDocumentType $type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * The client's shipping cycle to which this shipment belongs.
     *
     * @param string $ShippingCycle
     * return FedEx_CloseService_CloseDocument
     */
    public function setShippingCycle($shippingCycle)
    {
        $this->ShippingCycle = $shippingCycle;
        return $this;
    }
    
    /**
     * 
     *
     * @param ShippingDocumentDispositionType $ShippingDocumentDisposition
     * return FedEx_CloseService_CloseDocument
     */
    public function setShippingDocumentDisposition(FedEx_CloseService_ShippingDocumentDispositionType $shippingDocumentDisposition)
    {
        $this->ShippingDocumentDisposition = $shippingDocumentDisposition;
        return $this;
    }
    
    /**
     * The name under which a STORED or DEFERRED document is written.
     *
     * @param string $AccessReference
     * return FedEx_CloseService_CloseDocument
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
     * return FedEx_CloseService_CloseDocument
     */
    public function setResolution($resolution)
    {
        $this->Resolution = $resolution;
        return $this;
    }
    
    /**
     * Number of copies to print.
     *
     * @param positiveInteger $CopiesToPrint
     * return FedEx_CloseService_CloseDocument
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
     * return FedEx_CloseService_CloseDocument
     */
    public function setParts(array $parts)
    {
        $this->Parts = $parts;
        return $this;
    }
    

    
}