<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_LocatorService_FedExLocatorRequest
    extends FedEx_AbstractComplexType
{

    /**
     * The descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $WebAuthenticationDetail
     * return FedEx_LocatorService_FedExLocatorRequest
     */
    public function setWebAuthenticationDetail(FedEx_LocatorService_WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    
    /**
     * The descriptive data identifying the client submitting the transaction.
     *
     * @param ClientDetail $ClientDetail
     * return FedEx_LocatorService_FedExLocatorRequest
     */
    public function setClientDetail(FedEx_LocatorService_ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * The descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $TransactionDetail
     * return FedEx_LocatorService_FedExLocatorRequest
     */
    public function setTransactionDetail(FedEx_LocatorService_TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @param VersionId $Version
     * return FedEx_LocatorService_FedExLocatorRequest
     */
    public function setVersion(FedEx_LocatorService_VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * The index of first location to be returned from among all matching locations. Defauls to 1.
     *
     * @param int $BeginningRecordIndex
     * return FedEx_LocatorService_FedExLocatorRequest
     */
    public function setBeginningRecordIndex($beginningRecordIndex)
    {
        $this->BeginningRecordIndex = $beginningRecordIndex;
        return $this;
    }
    
    /**
     * The maximum number of locations to be returned. Maximum count allowed is 25. Defaults to 10.
     *
     * @param  $MaximumMatchCount
     * return FedEx_LocatorService_FedExLocatorRequest
     */
    public function setMaximumMatchCount( $maximumMatchCount)
    {
        $this->MaximumMatchCount = $maximumMatchCount;
        return $this;
    }
    
    /**
     * Units in which Distance to location is to be expressed. See DistanceUnits for list of returned values.
     *
     * @param DistanceUnits $DistanceUnits
     * return FedEx_LocatorService_FedExLocatorRequest
     */
    public function setDistanceUnits(FedEx_LocatorService_DistanceUnits $distanceUnits)
    {
        $this->DistanceUnits = $distanceUnits;
        return $this;
    }
    
    /**
     * Phone number for which nearby FedEx locations are to be found. This element is required if NearToAddress is not present.
     *
     * @param string $NearToPhoneNumber
     * return FedEx_LocatorService_FedExLocatorRequest
     */
    public function setNearToPhoneNumber($nearToPhoneNumber)
    {
        $this->NearToPhoneNumber = $nearToPhoneNumber;
        return $this;
    }
    
    /**
     * The descriptive data of a physical location for which nearby FedEx locations are to be found. This element is required if NearToPhoneNumber is not present. Both City and StateOrProvinceCode child elements are required if	PostalCode is not present.
     *
     * @param Address $NearToAddress
     * return FedEx_LocatorService_FedExLocatorRequest
     */
    public function setNearToAddress(FedEx_LocatorService_Address $nearToAddress)
    {
        $this->NearToAddress = $nearToAddress;
        return $this;
    }
    
    /**
     * The descriptive data about the various drop off services that must be available at the locations returned.
     *
     * @param DropoffServicesDesired $DropoffServicesDesired
     * return FedEx_LocatorService_FedExLocatorRequest
     */
    public function setDropoffServicesDesired(FedEx_LocatorService_DropoffServicesDesired $dropoffServicesDesired)
    {
        $this->DropoffServicesDesired = $dropoffServicesDesired;
        return $this;
    }
    

    
}