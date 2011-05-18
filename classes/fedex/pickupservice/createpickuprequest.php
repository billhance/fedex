<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The descriptive data to schedule a FedEx package pickup request.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PickupService_CreatePickupRequest
    extends FedEx_AbstractComplexType
{

    /**
     * Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $WebAuthenticationDetail
     * return FedEx_PickupService_CreatePickupRequest
     */
    public function setWebAuthenticationDetail(FedEx_PickupService_WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    
    /**
     * The descriptive data identifying the client submitting the transaction.
     *
     * @param ClientDetail $ClientDetail
     * return FedEx_PickupService_CreatePickupRequest
     */
    public function setClientDetail(FedEx_PickupService_ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * The descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $TransactionDetail
     * return FedEx_PickupService_CreatePickupRequest
     */
    public function setTransactionDetail(FedEx_PickupService_TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @param VersionId $Version
     * return FedEx_PickupService_CreatePickupRequest
     */
    public function setVersion(FedEx_PickupService_VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * 
     *
     * @param AssociatedAccount $AssociatedAccountNumber
     * return FedEx_PickupService_CreatePickupRequest
     */
    public function setAssociatedAccountNumber(FedEx_PickupService_AssociatedAccount $associatedAccountNumber)
    {
        $this->AssociatedAccountNumber = $associatedAccountNumber;
        return $this;
    }
    
    /**
     * Descriptive data about the origin of the shipment being picked up by FedEx.
     *
     * @param PickupOriginDetail $OriginDetail
     * return FedEx_PickupService_CreatePickupRequest
     */
    public function setOriginDetail(FedEx_PickupService_PickupOriginDetail $originDetail)
    {
        $this->OriginDetail = $originDetail;
        return $this;
    }
    
    /**
     * Descriptive data for a freight shipment being picked up by FedEx. This is element is only required when requesting a freight service pickup and should not be used for other types of pickups including express freight pickups.
     *
     * @param FreightPickupDetail $FreightPickupDetail
     * return FedEx_PickupService_CreatePickupRequest
     */
    public function setFreightPickupDetail(FedEx_PickupService_FreightPickupDetail $freightPickupDetail)
    {
        $this->FreightPickupDetail = $freightPickupDetail;
        return $this;
    }
    
    /**
     * Descriptive data for an express freight shipment being picked up by FedEx. This is element is only required when requesting a express freight service pickup and should not be used for other types of pickups.
     *
     * @param ExpressFreightPickupDetail $ExpressFreightDetail
     * return FedEx_PickupService_CreatePickupRequest
     */
    public function setExpressFreightDetail(FedEx_PickupService_ExpressFreightPickupDetail $expressFreightDetail)
    {
        $this->ExpressFreightDetail = $expressFreightDetail;
        return $this;
    }
    
    /**
     * Identifies the number of packages that are being tendered to FedEx for this pickup request.
     *
     * @param positiveInteger $PackageCount
     * return FedEx_PickupService_CreatePickupRequest
     */
    public function setPackageCount($packageCount)
    {
        $this->PackageCount = $packageCount;
        return $this;
    }
    
    /**
     * Identifies the total weight of the package or packages being tendered to FedEx for this pickup request.
     *
     * @param Weight $TotalWeight
     * return FedEx_PickupService_CreatePickupRequest
     */
    public function setTotalWeight(FedEx_PickupService_Weight $totalWeight)
    {
        $this->TotalWeight = $totalWeight;
        return $this;
    }
    
    /**
     * Identifies the FedEx operating company (transportation) that is being sent the package pickup request.
     *
     * @param CarrierCodeType $CarrierCode
     * return FedEx_PickupService_CreatePickupRequest
     */
    public function setCarrierCode(FedEx_PickupService_CarrierCodeType $carrierCode)
    {
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    
    /**
     * Identifies the number of oversize packages that are being tendered to FedEx for this pickup request. Please refer to the FedEx Service Guide for package size limits to determine if a package is oversized for the service being shipped.
     *
     * @param positiveInteger $OversizePackageCount
     * return FedEx_PickupService_CreatePickupRequest
     */
    public function setOversizePackageCount($oversizePackageCount)
    {
        $this->OversizePackageCount = $oversizePackageCount;
        return $this;
    }
    
    /**
     * Identifies any remarks or comments to be passed to the FedEx courier picking up the shipment.
     *
     * @param string $Remarks
     * return FedEx_PickupService_CreatePickupRequest
     */
    public function setRemarks($remarks)
    {
        $this->Remarks = $remarks;
        return $this;
    }
    
    /**
     * Identifies the type of commodity being shipped. This element is required for an international shipment.
     *
     * @param string $CommodityDescription
     * return FedEx_PickupService_CreatePickupRequest
     */
    public function setCommodityDescription($commodityDescription)
    {
        $this->CommodityDescription = $commodityDescription;
        return $this;
    }
    
    /**
     * Describes the country relationships (domestic and/or international) among the shipments being picked up.
     *
     * @param array[CountryRelationshipType] $CountryRelationships
     * return FedEx_PickupService_CreatePickupRequest
     */
    public function setCountryRelationships(array $countryRelationships)
    {
        $this->CountryRelationships = $countryRelationships;
        return $this;
    }
    

    
}