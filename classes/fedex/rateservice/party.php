<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The descriptive data for a person or company entitiy doing business with FedEx.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_Party
    extends FedEx_AbstractComplexType
{

    /**
     * Identifies the FedEx account number assigned to the customer.
     *
     * @param string $AccountNumber
     * return FedEx_RateService_Party
     */
    public function setAccountNumber($accountNumber)
    {
        $this->AccountNumber = $accountNumber;
        return $this;
    }
    
    /**
     * Descriptive data for taxpayer identification information.
     *
     * @param array[TaxpayerIdentification] $Tins
     * return FedEx_RateService_Party
     */
    public function setTins(array $tins)
    {
        $this->Tins = $tins;
        return $this;
    }
    
    /**
     * Descriptive data identifying the point-of-contact person.
     *
     * @param Contact $Contact
     * return FedEx_RateService_Party
     */
    public function setContact(FedEx_RateService_Contact $contact)
    {
        $this->Contact = $contact;
        return $this;
    }
    
    /**
     * The descriptive data for a physical location.
     *
     * @param Address $Address
     * return FedEx_RateService_Party
     */
    public function setAddress(FedEx_RateService_Address $address)
    {
        $this->Address = $address;
        return $this;
    }
    

    
}