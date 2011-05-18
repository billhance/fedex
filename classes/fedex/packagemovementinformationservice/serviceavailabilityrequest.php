<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The descriptive data which is used to determine which FedEx Express services are available between an origin and destination. To check the availability of one particular FedEx Express service and packaging type, include the Service and Packaging elements in the request message. Only information regarding that single service and packaging type will be returned from the request. To obtain a list of all available services for a given origin and destination, omit the Service and Packaging elements from the request. In this case the reply will contain every available service.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PackageMovementInformationService_ServiceAvailabilityRequest
    extends FedEx_AbstractComplexType
{

    /**
     * The descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $WebAuthenticationDetail
     * return FedEx_PackageMovementInformationService_ServiceAvailabilityRequest
     */
    public function setWebAuthenticationDetail(FedEx_PackageMovementInformationService_WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    
    /**
     * The descriptive data identifying the client submitting the transaction.
     *
     * @param ClientDetail $ClientDetail
     * return FedEx_PackageMovementInformationService_ServiceAvailabilityRequest
     */
    public function setClientDetail(FedEx_PackageMovementInformationService_ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * The descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $TransactionDetail
     * return FedEx_PackageMovementInformationService_ServiceAvailabilityRequest
     */
    public function setTransactionDetail(FedEx_PackageMovementInformationService_TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @param VersionId $Version
     * return FedEx_PackageMovementInformationService_ServiceAvailabilityRequest
     */
    public function setVersion(FedEx_PackageMovementInformationService_VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * The descriptive data for the physical location from which the shipment originates.
     *
     * @param Address $Origin
     * return FedEx_PackageMovementInformationService_ServiceAvailabilityRequest
     */
    public function setOrigin(FedEx_PackageMovementInformationService_Address $origin)
    {
        $this->Origin = $origin;
        return $this;
    }
    
    /**
     * The descriptive data for the physical location to which the shipment is destined.
     *
     * @param Address $Destination
     * return FedEx_PackageMovementInformationService_ServiceAvailabilityRequest
     */
    public function setDestination(FedEx_PackageMovementInformationService_Address $destination)
    {
        $this->Destination = $destination;
        return $this;
    }
    
    /**
     * The date on which the package will be shipped. The date should not  be a past date or a date more than 10 days in the future. The date format must be YYYY-MM-DD.
     *
     * @param date $ShipDate
     * return FedEx_PackageMovementInformationService_ServiceAvailabilityRequest
     */
    public function setShipDate($shipDate)
    {
        $this->ShipDate = $shipDate;
        return $this;
    }
    
    /**
     * Identification of a FedEx operating company (transportation). For this transaction the value must be "FDXE".
     *
     * @param CarrierCodeType $CarrierCode
     * return FedEx_PackageMovementInformationService_ServiceAvailabilityRequest
     */
    public function setCarrierCode(FedEx_PackageMovementInformationService_CarrierCodeType $carrierCode)
    {
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    
    /**
     * Identifies the FedEx transportation service to check for availability. See ServiceType for valid values. Omit this element and the Packaging element to get a list of every available service.
     *
     * @param ServiceType $Service
     * return FedEx_PackageMovementInformationService_ServiceAvailabilityRequest
     */
    public function setService(FedEx_PackageMovementInformationService_ServiceType $service)
    {
        $this->Service = $service;
        return $this;
    }
    
    /**
     * Identifies the FedEx packaging type used by the requestor for the package. See PackagingType for valid values. Omit this element and the Service element to get a list of every available service.
     *
     * @param PackagingType $Packaging
     * return FedEx_PackageMovementInformationService_ServiceAvailabilityRequest
     */
    public function setPackaging(FedEx_PackageMovementInformationService_PackagingType $packaging)
    {
        $this->Packaging = $packaging;
        return $this;
    }
    

    
}