<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The instructions indicating how to print the OP-900 form for hazardous materials packages.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_Op900Detail
    extends FedEx_AbstractComplexType
{

    /**
     * Specifies characteristics of a shipping document to be produced.
     *
     * @param ShippingDocumentFormat $Format
     * return FedEx_ShipService_Op900Detail
     */
    public function setFormat(FedEx_ShipService_ShippingDocumentFormat $format)
    {
        $this->Format = $format;
        return $this;
    }
    
    /**
     * Identifies which reference type (from the package's customer references) is to be used as the source for the reference on this OP-900.
     *
     * @param CustomerReferenceType $Reference
     * return FedEx_ShipService_Op900Detail
     */
    public function setReference(FedEx_ShipService_CustomerReferenceType $reference)
    {
        $this->Reference = $reference;
        return $this;
    }
    
    /**
     * Specifies the usage and identification of customer supplied images to be used on this document.
     *
     * @param array[CustomerImageUsage] $CustomerImageUsages
     * return FedEx_ShipService_Op900Detail
     */
    public function setCustomerImageUsages(array $customerImageUsages)
    {
        $this->CustomerImageUsages = $customerImageUsages;
        return $this;
    }
    
    /**
     * Data field to be used when a name is to be printed in the document instead of (or in addition to) a signature image.
     *
     * @param string $SignatureName
     * return FedEx_ShipService_Op900Detail
     */
    public function setSignatureName($signatureName)
    {
        $this->SignatureName = $signatureName;
        return $this;
    }
    

    
}