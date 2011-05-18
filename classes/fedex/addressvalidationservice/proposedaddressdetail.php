<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_AddressValidationService_ProposedAddressDetail
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param integer $Score
     * return FedEx_AddressValidationService_ProposedAddressDetail
     */
    public function setScore($score)
    {
        $this->Score = $score;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[AddressValidationChangeType] $Changes
     * return FedEx_AddressValidationService_ProposedAddressDetail
     */
    public function setChanges(array $changes)
    {
        $this->Changes = $changes;
        return $this;
    }
    
    /**
     * 
     *
     * @param ResidentialStatusType $ResidentialStatus
     * return FedEx_AddressValidationService_ProposedAddressDetail
     */
    public function setResidentialStatus(FedEx_AddressValidationService_ResidentialStatusType $residentialStatus)
    {
        $this->ResidentialStatus = $residentialStatus;
        return $this;
    }
    
    /**
     * 
     *
     * @param DeliveryPointValidationType $DeliveryPointValidation
     * return FedEx_AddressValidationService_ProposedAddressDetail
     */
    public function setDeliveryPointValidation(FedEx_AddressValidationService_DeliveryPointValidationType $deliveryPointValidation)
    {
        $this->DeliveryPointValidation = $deliveryPointValidation;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $CompanyName
     * return FedEx_AddressValidationService_ProposedAddressDetail
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
     * return FedEx_AddressValidationService_ProposedAddressDetail
     */
    public function setAddress(FedEx_AddressValidationService_Address $address)
    {
        $this->Address = $address;
        return $this;
    }
    
    /**
     * 
     *
     * @param ParsedAddressPart $ParsedCompanyName
     * return FedEx_AddressValidationService_ProposedAddressDetail
     */
    public function setParsedCompanyName(FedEx_AddressValidationService_ParsedAddressPart $parsedCompanyName)
    {
        $this->ParsedCompanyName = $parsedCompanyName;
        return $this;
    }
    
    /**
     * 
     *
     * @param ParsedAddress $ParsedAddress
     * return FedEx_AddressValidationService_ProposedAddressDetail
     */
    public function setParsedAddress(FedEx_AddressValidationService_ParsedAddress $parsedAddress)
    {
        $this->ParsedAddress = $parsedAddress;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $RemovedNonAddressData
     * return FedEx_AddressValidationService_ProposedAddressDetail
     */
    public function setRemovedNonAddressData($removedNonAddressData)
    {
        $this->RemovedNonAddressData = $removedNonAddressData;
        return $this;
    }
    

    
}