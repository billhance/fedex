<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Middle name added to support credit card fraud detection.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PickupService_ParsedPersonName
    extends FedEx_AbstractComplexType
{

    /**
     * The First name of the person.
     *
     * @param string $FirstName
     * return FedEx_PickupService_ParsedPersonName
     */
    public function setFirstName($firstName)
    {
        $this->FirstName = $firstName;
        return $this;
    }
    
    /**
     * The middle name of the person.
     *
     * @param string $MiddleName
     * return FedEx_PickupService_ParsedPersonName
     */
    public function setMiddleName($middleName)
    {
        $this->MiddleName = $middleName;
        return $this;
    }
    
    /**
     * The last name of the person.
     *
     * @param string $LastName
     * return FedEx_PickupService_ParsedPersonName
     */
    public function setLastName($lastName)
    {
        $this->LastName = $lastName;
        return $this;
    }
    

    
}