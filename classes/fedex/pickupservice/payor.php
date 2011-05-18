<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The descriptive data identifying the party responsible for payment for a service.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PickupService_Payor
    extends FedEx_AbstractComplexType
{

    /**
     * Identifies the FedEx account number assigned to the payor.
     *
     * @param string $AccountNumber
     * return FedEx_PickupService_Payor
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
     * return FedEx_PickupService_Payor
     */
    public function setCountryCode($countryCode)
    {
        $this->CountryCode = $countryCode;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[AssociatedAccount] $AssociatedAccounts
     * return FedEx_PickupService_Payor
     */
    public function setAssociatedAccounts(array $associatedAccounts)
    {
        $this->AssociatedAccounts = $associatedAccounts;
        return $this;
    }
    

    
}