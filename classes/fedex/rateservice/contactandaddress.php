<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_ContactAndAddress
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param Contact $Contact
     * return FedEx_RateService_ContactAndAddress
     */
    public function setContact(FedEx_RateService_Contact $contact)
    {
        $this->Contact = $contact;
        return $this;
    }
    
    /**
     * 
     *
     * @param Address $Address
     * return FedEx_RateService_ContactAndAddress
     */
    public function setAddress(FedEx_RateService_Address $address)
    {
        $this->Address = $address;
        return $this;
    }
    

    
}