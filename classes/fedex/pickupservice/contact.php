<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The descriptive data for a point-of-contact person.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PickupService_Contact
    extends FedEx_AbstractComplexType
{

    /**
     * Client provided identifier corresponding to this contact information.
     *
     * @param string $ContactId
     * return FedEx_PickupService_Contact
     */
    public function setContactId($contactId)
    {
        $this->ContactId = $contactId;
        return $this;
    }
    
    /**
     * Identifies the contact person's name.
     *
     * @param string $PersonName
     * return FedEx_PickupService_Contact
     */
    public function setPersonName($personName)
    {
        $this->PersonName = $personName;
        return $this;
    }
    
    /**
     * Identifies the contact person's title.
     *
     * @param string $Title
     * return FedEx_PickupService_Contact
     */
    public function setTitle($title)
    {
        $this->Title = $title;
        return $this;
    }
    
    /**
     * Identifies the company this contact is associated with.
     *
     * @param string $CompanyName
     * return FedEx_PickupService_Contact
     */
    public function setCompanyName($companyName)
    {
        $this->CompanyName = $companyName;
        return $this;
    }
    
    /**
     * Identifies the phone number associated with this contact.
     *
     * @param string $PhoneNumber
     * return FedEx_PickupService_Contact
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->PhoneNumber = $phoneNumber;
        return $this;
    }
    
    /**
     * Identifies the phone extension associated with this contact.
     *
     * @param string $PhoneExtension
     * return FedEx_PickupService_Contact
     */
    public function setPhoneExtension($phoneExtension)
    {
        $this->PhoneExtension = $phoneExtension;
        return $this;
    }
    
    /**
     * Identifies the pager number associated with this contact.
     *
     * @param string $PagerNumber
     * return FedEx_PickupService_Contact
     */
    public function setPagerNumber($pagerNumber)
    {
        $this->PagerNumber = $pagerNumber;
        return $this;
    }
    
    /**
     * Identifies the fax number associated with this contact.
     *
     * @param string $FaxNumber
     * return FedEx_PickupService_Contact
     */
    public function setFaxNumber($faxNumber)
    {
        $this->FaxNumber = $faxNumber;
        return $this;
    }
    
    /**
     * Identifies the email address associated with this contact.
     *
     * @param string $EMailAddress
     * return FedEx_PickupService_Contact
     */
    public function setEMailAddress($eMailAddress)
    {
        $this->EMailAddress = $eMailAddress;
        return $this;
    }
    

    
}