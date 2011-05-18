<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Descriptive data identifying the party responsible for payment for a service.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_Payor
    extends FedEx_AbstractComplexType
{

    /**
     * Identifies the FedEx account number assigned to the payor.
     *
     * @param string $AccountNumber
     * return FedEx_RateService_Payor
     */
    public function setAccountNumber($accountNumber)
    {
        $this->AccountNumber = $accountNumber;
        return $this;
    }
    
    /**
     * Identifies the country of the payor.
     *
     * @param string $CountryCode
     * return FedEx_RateService_Payor
     */
    public function setCountryCode($countryCode)
    {
        $this->CountryCode = $countryCode;
        return $this;
    }
    

    
}