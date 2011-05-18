<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_AddressValidationService_AddressValidationResult
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param string $AddressId
     * return FedEx_AddressValidationService_AddressValidationResult
     */
    public function setAddressId($addressId)
    {
        $this->AddressId = $addressId;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[ProposedAddressDetail] $ProposedAddressDetails
     * return FedEx_AddressValidationService_AddressValidationResult
     */
    public function setProposedAddressDetails(array $proposedAddressDetails)
    {
        $this->ProposedAddressDetails = $proposedAddressDetails;
        return $this;
    }
    

    
}