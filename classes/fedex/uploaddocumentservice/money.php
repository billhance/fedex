<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The descriptive data for the medium of exchange for FedEx services.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_UploadDocumentService_Money
    extends FedEx_AbstractComplexType
{

    /**
     * Identifies the currency of the monetary amount.
     *
     * @param string $Currency
     * return FedEx_UploadDocumentService_Money
     */
    public function setCurrency($currency)
    {
        $this->Currency = $currency;
        return $this;
    }
    
    /**
     * Identifies the monetary amount.
     *
     * @param decimal $Amount
     * return FedEx_UploadDocumentService_Money
     */
    public function setAmount($amount)
    {
        $this->Amount = $amount;
        return $this;
    }
    

    
}