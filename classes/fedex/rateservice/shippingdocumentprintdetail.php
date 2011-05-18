<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Specifies printing options for a shipping document.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_ShippingDocumentPrintDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Provides environment-specific printer identification.
     *
     * @param string $PrinterId
     * return FedEx_RateService_ShippingDocumentPrintDetail
     */
    public function setPrinterId($printerId)
    {
        $this->PrinterId = $printerId;
        return $this;
    }
    

    
}