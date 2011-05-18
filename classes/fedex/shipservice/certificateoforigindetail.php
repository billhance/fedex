<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The instructions indicating how to print the Certificate of Origin ( e.g. whether or not to include the instructions, image type, etc ...)
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_CertificateOfOriginDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Specifies characteristics of a shipping document to be produced.
     *
     * @param ShippingDocumentFormat $DocumentFormat
     * return FedEx_ShipService_CertificateOfOriginDetail
     */
    public function setDocumentFormat(FedEx_ShipService_ShippingDocumentFormat $documentFormat)
    {
        $this->DocumentFormat = $documentFormat;
        return $this;
    }
    
    /**
     * Specifies the usage and identification of customer supplied images to be used on this document.
     *
     * @param array[CustomerImageUsage] $CustomerImageUsages
     * return FedEx_ShipService_CertificateOfOriginDetail
     */
    public function setCustomerImageUsages(array $customerImageUsages)
    {
        $this->CustomerImageUsages = $customerImageUsages;
        return $this;
    }
    

    
}