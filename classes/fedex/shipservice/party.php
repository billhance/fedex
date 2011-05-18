<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The descriptive data for a person or company entitiy doing business with FedEx.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_Party
    extends FedEx_AbstractComplexType
{

    /**
     * Identifies the FedEx account number assigned to the customer.
     *
     * @param string $AccountNumber
     * return FedEx_ShipService_Party
     */
    public function setAccountNumber($accountNumber)
    {
        $this->AccountNumber = $accountNumber;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[TaxpayerIdentification] $Tins
     * return FedEx_ShipService_Party
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
     * return FedEx_ShipService_Party
     */
    public function setContact(FedEx_ShipService_Contact $contact)
    {
        $this->Contact = $contact;
        return $this;
    }
    
    /**
     * The descriptive data for a physical location.
     *
     * @param Address $Address
     * return FedEx_ShipService_Party
     */
    public function setAddress(FedEx_ShipService_Address $address)
    {
        $this->Address = $address;
        return $this;
    }
    

    
}