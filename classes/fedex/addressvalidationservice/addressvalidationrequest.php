<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_AddressValidationService_AddressValidationRequest
    extends FedEx_AbstractComplexType
{

    /**
     * The descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $WebAuthenticationDetail
     * return FedEx_AddressValidationService_AddressValidationRequest
     */
    public function setWebAuthenticationDetail(FedEx_AddressValidationService_WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    
    /**
     * Descriptive data identifying the client submitting the transaction.
     *
     * @param ClientDetail $ClientDetail
     * return FedEx_AddressValidationService_AddressValidationRequest
     */
    public function setClientDetail(FedEx_AddressValidationService_ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * Descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $TransactionDetail
     * return FedEx_AddressValidationService_AddressValidationRequest
     */
    public function setTransactionDetail(FedEx_AddressValidationService_TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @param VersionId $Version
     * return FedEx_AddressValidationService_AddressValidationRequest
     */
    public function setVersion(FedEx_AddressValidationService_VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * 
     *
     * @param dateTime $RequestTimestamp
     * return FedEx_AddressValidationService_AddressValidationRequest
     */
    public function setRequestTimestamp($requestTimestamp)
    {
        $this->RequestTimestamp = $requestTimestamp;
        return $this;
    }
    
    /**
     * 
     *
     * @param AddressValidationOptions $Options
     * return FedEx_AddressValidationService_AddressValidationRequest
     */
    public function setOptions(FedEx_AddressValidationService_AddressValidationOptions $options)
    {
        $this->Options = $options;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[AddressToValidate] $AddressesToValidate
     * return FedEx_AddressValidationService_AddressValidationRequest
     */
    public function setAddressesToValidate(array $addressesToValidate)
    {
        $this->AddressesToValidate = $addressesToValidate;
        return $this;
    }
    

    
}