<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The instructions indicating how to print the OP-950 form for hazardous materials.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_CloseService_Op950Detail
    extends FedEx_AbstractComplexType
{

    /**
     * Specifies characteristics of a shipping document to be produced.
     *
     * @param CloseDocumentFormat $Format
     * return FedEx_CloseService_Op950Detail
     */
    public function setFormat(FedEx_CloseService_CloseDocumentFormat $format)
    {
        $this->Format = $format;
        return $this;
    }
    
    /**
     * Specifies the usage and identification of a customer supplied image to be used on this document.
     *
     * @param array[CustomerImageUsage] $CustomerImageUsages
     * return FedEx_CloseService_Op950Detail
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
     * return FedEx_CloseService_Op950Detail
     */
    public function setSignatureName($signatureName)
    {
        $this->SignatureName = $signatureName;
        return $this;
    }
    

    
}