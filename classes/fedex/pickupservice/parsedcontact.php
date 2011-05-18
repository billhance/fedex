<?php defined('SYSPATH') or die('No direct script access.');

/**
 * This type contains equivalent data to Contact, but uses a form of person name with separate first and last names.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PickupService_ParsedContact
    extends FedEx_AbstractComplexType
{

    /**
     * The name of the person.
     *
     * @param ParsedPersonName $PersonName
     * return FedEx_PickupService_ParsedContact
     */
    public function setPersonName(FedEx_PickupService_ParsedPersonName $personName)
    {
        $this->PersonName = $personName;
        return $this;
    }
    
    /**
     * The title of the person.
     *
     * @param string $Title
     * return FedEx_PickupService_ParsedContact
     */
    public function setTitle($title)
    {
        $this->Title = $title;
        return $this;
    }
    
    /**
     * The name of the company, this person is working for.
     *
     * @param string $CompanyName
     * return FedEx_PickupService_ParsedContact
     */
    public function setCompanyName($companyName)
    {
        $this->CompanyName = $companyName;
        return $this;
    }
    
    /**
     * Phone number of the person.
     *
     * @param string $PhoneNumber
     * return FedEx_PickupService_ParsedContact
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->PhoneNumber = $phoneNumber;
        return $this;
    }
    
    /**
     * Pager number of the person.
     *
     * @param string $PagerNumber
     * return FedEx_PickupService_ParsedContact
     */
    public function setPagerNumber($pagerNumber)
    {
        $this->PagerNumber = $pagerNumber;
        return $this;
    }
    
    /**
     * Fax number of the person.
     *
     * @param string $FaxNumber
     * return FedEx_PickupService_ParsedContact
     */
    public function setFaxNumber($faxNumber)
    {
        $this->FaxNumber = $faxNumber;
        return $this;
    }
    
    /**
     * Email address information.
     *
     * @param string $EMailAddress
     * return FedEx_PickupService_ParsedContact
     */
    public function setEMailAddress($eMailAddress)
    {
        $this->EMailAddress = $eMailAddress;
        return $this;
    }
    

    
}