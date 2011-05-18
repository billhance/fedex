<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_AddressValidationService_AddressToValidate
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param string $AddressId
     * return FedEx_AddressValidationService_AddressToValidate
     */
    public function setAddressId($addressId)
    {
        $this->AddressId = $addressId;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $CompanyName
     * return FedEx_AddressValidationService_AddressToValidate
     */
    public function setCompanyName($companyName)
    {
        $this->CompanyName = $companyName;
        return $this;
    }
    
    /**
     * 
     *
     * @param Address $Address
     * return FedEx_AddressValidationService_AddressToValidate
     */
    public function setAddress(FedEx_AddressValidationService_Address $address)
    {
        $this->Address = $address;
        return $this;
    }
    

    
}