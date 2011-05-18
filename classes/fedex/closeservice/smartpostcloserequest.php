<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_CloseService_SmartPostCloseRequest
    extends FedEx_AbstractComplexType
{

    /**
     * The descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $WebAuthenticationDetail
     * return FedEx_CloseService_SmartPostCloseRequest
     */
    public function setWebAuthenticationDetail(FedEx_CloseService_WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    
    /**
     * 
     *
     * @param ClientDetail $ClientDetail
     * return FedEx_CloseService_SmartPostCloseRequest
     */
    public function setClientDetail(FedEx_CloseService_ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * 
     *
     * @param TransactionDetail $TransactionDetail
     * return FedEx_CloseService_SmartPostCloseRequest
     */
    public function setTransactionDetail(FedEx_CloseService_TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * 
     *
     * @param VersionId $Version
     * return FedEx_CloseService_SmartPostCloseRequest
     */
    public function setVersion(FedEx_CloseService_VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $HubId
     * return FedEx_CloseService_SmartPostCloseRequest
     */
    public function setHubId($hubId)
    {
        $this->HubId = $hubId;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $CustomerManifestId
     * return FedEx_CloseService_SmartPostCloseRequest
     */
    public function setCustomerManifestId($customerManifestId)
    {
        $this->CustomerManifestId = $customerManifestId;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $DestinationCountryCode
     * return FedEx_CloseService_SmartPostCloseRequest
     */
    public function setDestinationCountryCode($destinationCountryCode)
    {
        $this->DestinationCountryCode = $destinationCountryCode;
        return $this;
    }
    
    /**
     * 
     *
     * @param CarrierCodeType $PickUpCarrier
     * return FedEx_CloseService_SmartPostCloseRequest
     */
    public function setPickUpCarrier(FedEx_CloseService_CarrierCodeType $pickUpCarrier)
    {
        $this->PickUpCarrier = $pickUpCarrier;
        return $this;
    }
    

    
}