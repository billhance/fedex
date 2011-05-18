<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The instructions indicating how to print the Commercial Invoice( e.g. image type) Specifies characteristics of a shipping document to be produced.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_CommercialInvoiceDetail
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param ShippingDocumentFormat $Format
     * return FedEx_ShipService_CommercialInvoiceDetail
     */
    public function setFormat(FedEx_ShipService_ShippingDocumentFormat $format)
    {
        $this->Format = $format;
        return $this;
    }
    
    /**
     * Specifies the usage and identification of a customer supplied image to be used on this document.
     *
     * @param array[CustomerImageUsage] $CustomerImageUsages
     * return FedEx_ShipService_CommercialInvoiceDetail
     */
    public function setCustomerImageUsages(array $customerImageUsages)
    {
        $this->CustomerImageUsages = $customerImageUsages;
        return $this;
    }
    

    
}