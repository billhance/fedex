<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The descriptive data for a person or company entitiy doing business with FedEx.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PickupService_ContactAndAddress
    extends FedEx_AbstractComplexType
{

    /**
     * Descriptive data identifying the point-of-contact person.
     *
     * @param Contact $Contact
     * return FedEx_PickupService_ContactAndAddress
     */
    public function setContact(FedEx_PickupService_Contact $contact)
    {
        $this->Contact = $contact;
        return $this;
    }
    
    /**
     * The descriptive data for a physical location.
     *
     * @param Address $Address
     * return FedEx_PickupService_ContactAndAddress
     */
    public function setAddress(FedEx_PickupService_Address $address)
    {
        $this->Address = $address;
        return $this;
    }
    

    
}