<?php defined('SYSPATH') or die('No direct script access.');

/**
 * FedEx Express Tag Availability request.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ReturnTagService_ExpressTagAvailabilityRequest
    extends FedEx_AbstractComplexType
{

    /**
     * The descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $WebAuthenticationDetail
     * return FedEx_ReturnTagService_ExpressTagAvailabilityRequest
     */
    public function setWebAuthenticationDetail(FedEx_ReturnTagService_WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    
    /**
     * The descriptive data identifying the client submitting the transaction.
     *
     * @param ClientDetail $ClientDetail
     * return FedEx_ReturnTagService_ExpressTagAvailabilityRequest
     */
    public function setClientDetail(FedEx_ReturnTagService_ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * The descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $TransactionDetail
     * return FedEx_ReturnTagService_ExpressTagAvailabilityRequest
     */
    public function setTransactionDetail(FedEx_ReturnTagService_TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @param VersionId $Version
     * return FedEx_ReturnTagService_ExpressTagAvailabilityRequest
     */
    public function setVersion(FedEx_ReturnTagService_VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Package ready date and time.
     *
     * @param dateTime $ReadyDateTime
     * return FedEx_ReturnTagService_ExpressTagAvailabilityRequest
     */
    public function setReadyDateTime($readyDateTime)
    {
        $this->ReadyDateTime = $readyDateTime;
        return $this;
    }
    
    /**
     * Sender postal code and country.
     *
     * @param Address $OriginAddress
     * return FedEx_ReturnTagService_ExpressTagAvailabilityRequest
     */
    public function setOriginAddress(FedEx_ReturnTagService_Address $originAddress)
    {
        $this->OriginAddress = $originAddress;
        return $this;
    }
    
    /**
     * FedEx Service type.
     *
     * @param ServiceType $Service
     * return FedEx_ReturnTagService_ExpressTagAvailabilityRequest
     */
    public function setService(FedEx_ReturnTagService_ServiceType $service)
    {
        $this->Service = $service;
        return $this;
    }
    
    /**
     * FedEx Packaging type.
     *
     * @param PackagingType $Packaging
     * return FedEx_ReturnTagService_ExpressTagAvailabilityRequest
     */
    public function setPackaging(FedEx_ReturnTagService_PackagingType $packaging)
    {
        $this->Packaging = $packaging;
        return $this;
    }
    

    
}