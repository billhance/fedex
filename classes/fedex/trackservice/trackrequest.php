<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The descriptive data sent by a client to track a FedEx package.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_TrackService_TrackRequest
    extends FedEx_AbstractComplexType
{

    /**
     * The descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $WebAuthenticationDetail
     * return FedEx_TrackService_TrackRequest
     */
    public function setWebAuthenticationDetail(FedEx_TrackService_WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    
    /**
     * The descriptive data identifying the client submitting the transaction.
     *
     * @param ClientDetail $ClientDetail
     * return FedEx_TrackService_TrackRequest
     */
    public function setClientDetail(FedEx_TrackService_ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * Descriptive data that governs data payload language/translations.  The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $TransactionDetail
     * return FedEx_TrackService_TrackRequest
     */
    public function setTransactionDetail(FedEx_TrackService_TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @param VersionId $Version
     * return FedEx_TrackService_TrackRequest
     */
    public function setVersion(FedEx_TrackService_VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Not available at this time. For FedEx internal use only.
     *
     * @param CarrierCodeType $CarrierCode
     * return FedEx_TrackService_TrackRequest
     */
    public function setCarrierCode(FedEx_TrackService_CarrierCodeType $carrierCode)
    {
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    
    /**
     * Identifies the package that tracking information is being requested of.
     *
     * @param TrackPackageIdentifier $PackageIdentifier
     * return FedEx_TrackService_TrackRequest
     */
    public function setPackageIdentifier(FedEx_TrackService_TrackPackageIdentifier $packageIdentifier)
    {
        $this->PackageIdentifier = $packageIdentifier;
        return $this;
    }
    
    /**
     * Required if a previous track-by-number response indicated that duplicates exist. The previous response will return summary information about the available choices along with this field. If it is desired to fully track one of the items returned in the duplicate summary reply, then the subsequent request must contain the tracking number and the paired unmodified unique ID. 
     *
     * @param string $TrackingNumberUniqueIdentifier
     * return FedEx_TrackService_TrackRequest
     */
    public function setTrackingNumberUniqueIdentifier($trackingNumberUniqueIdentifier)
    {
        $this->TrackingNumberUniqueIdentifier = $trackingNumberUniqueIdentifier;
        return $this;
    }
    
    /**
     * Required entry of date range to find desired results for reference tracking number. If not provided, FedEx will default to a range that may not refine the search as needed. If provided, ShipDateRangeEnd is required.
     *
     * @param date $ShipDateRangeBegin
     * return FedEx_TrackService_TrackRequest
     */
    public function setShipDateRangeBegin($shipDateRangeBegin)
    {
        $this->ShipDateRangeBegin = $shipDateRangeBegin;
        return $this;
    }
    
    /**
     * If provided, ShipDateRangeBegin is required. Required entry of date range to find desired results for reference tracking number. If not provided, results may vary
     *
     * @param date $ShipDateRangeEnd
     * return FedEx_TrackService_TrackRequest
     */
    public function setShipDateRangeEnd($shipDateRangeEnd)
    {
        $this->ShipDateRangeEnd = $shipDateRangeEnd;
        return $this;
    }
    
    /**
     * Providing the ShipmentAccountNumber will return all packages matching the search value and associated with this account. If account is not specified, then the destination country and postal (applicable countries) is required. The Reply data may be restricted if ShipmentAccountNumber is not provided.
     *
     * @param string $ShipmentAccountNumber
     * return FedEx_TrackService_TrackRequest
     */
    public function setShipmentAccountNumber($shipmentAccountNumber)
    {
        $this->ShipmentAccountNumber = $shipmentAccountNumber;
        return $this;
    }
    
    /**
     * The descriptive data for the physical location to which the shipment is destined.
     *
     * @param Address $Destination
     * return FedEx_TrackService_TrackRequest
     */
    public function setDestination(FedEx_TrackService_Address $destination)
    {
        $this->Destination = $destination;
        return $this;
    }
    
    /**
     * If false (the default) then reply will contain summary/profile data including current status. If true reply contains profile + detailed scan activity (multiple TrackDetail objects) for each package.
     *
     * @param boolean $IncludeDetailedScans
     * return FedEx_TrackService_TrackRequest
     */
    public function setIncludeDetailedScans($includeDetailedScans)
    {
        $this->IncludeDetailedScans = $includeDetailedScans;
        return $this;
    }
    
    /**
     * Required in order to obtain the additional data on second and subsequent track requests when more related tracking numbers exist that exceed the capacity of any one response structure. Should be absent from any first Track request. Populate PagingToken value with the contents returned in the previous reply PagingToken element. Populate TrackPackageIdentifier value with original request value.
     *
     * @param string $PagingToken
     * return FedEx_TrackService_TrackRequest
     */
    public function setPagingToken($pagingToken)
    {
        $this->PagingToken = $pagingToken;
        return $this;
    }
    

    
}