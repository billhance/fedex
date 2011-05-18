<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_TrackService_Contact
    extends FedEx_AbstractComplexType
{

    /**
     * Name of person.
     *
     * @param string $PersonName
     * return FedEx_TrackService_Contact
     */
    public function setPersonName($personName)
    {
        $this->PersonName = $personName;
        return $this;
    }
    
    /**
     * Title used by contact.
     *
     * @param string $Title
     * return FedEx_TrackService_Contact
     */
    public function setTitle($title)
    {
        $this->Title = $title;
        return $this;
    }
    
    /**
     * Company name.
     *
     * @param string $CompanyName
     * return FedEx_TrackService_Contact
     */
    public function setCompanyName($companyName)
    {
        $this->CompanyName = $companyName;
        return $this;
    }
    
    /**
     * Phone number of contact.
     *
     * @param string $PhoneNumber
     * return FedEx_TrackService_Contact
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->PhoneNumber = $phoneNumber;
        return $this;
    }
    
    /**
     * Phone extension of contact.
     *
     * @param string $PhoneExtension
     * return FedEx_TrackService_Contact
     */
    public function setPhoneExtension($phoneExtension)
    {
        $this->PhoneExtension = $phoneExtension;
        return $this;
    }
    
    /**
     * Pager number of contact.
     *
     * @param string $PagerNumber
     * return FedEx_TrackService_Contact
     */
    public function setPagerNumber($pagerNumber)
    {
        $this->PagerNumber = $pagerNumber;
        return $this;
    }
    
    /**
     * Fax number of contact.
     *
     * @param string $FaxNumber
     * return FedEx_TrackService_Contact
     */
    public function setFaxNumber($faxNumber)
    {
        $this->FaxNumber = $faxNumber;
        return $this;
    }
    
    /**
     * Email address of contact.
     *
     * @param string $EMailAddress
     * return FedEx_TrackService_Contact
     */
    public function setEMailAddress($eMailAddress)
    {
        $this->EMailAddress = $eMailAddress;
        return $this;
    }
    

    
}