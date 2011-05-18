<?php defined('SYSPATH') or die('No direct script access.');

/**
 * FedEx Postal Code Inquiry request.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PackageMovementInformationService_PostalCodeInquiryRequest
    extends FedEx_AbstractComplexType
{

    /**
     * The descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $WebAuthenticationDetail
     * return FedEx_PackageMovementInformationService_PostalCodeInquiryRequest
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
     * return FedEx_PackageMovementInformationService_PostalCodeInquiryRequest
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
     * return FedEx_PackageMovementInformationService_PostalCodeInquiryRequest
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
     * return FedEx_PackageMovementInformationService_PostalCodeInquiryRequest
     */
    public function setVersion(FedEx_PackageMovementInformationService_VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Identifies the carrier code type.
     *
     * @param CarrierCodeType $CarrierCode
     * return FedEx_PackageMovementInformationService_PostalCodeInquiryRequest
     */
    public function setCarrierCode(FedEx_PackageMovementInformationService_CarrierCodeType $carrierCode)
    {
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    
    /**
     * Identifies the postal code. Required if CountryCode is US or CA.
     *
     * @param string $PostalCode
     * return FedEx_PackageMovementInformationService_PostalCodeInquiryRequest
     */
    public function setPostalCode($postalCode)
    {
        $this->PostalCode = $postalCode;
        return $this;
    }
    
    /**
     * Identifies the country code.
     *
     * @param string $CountryCode
     * return FedEx_PackageMovementInformationService_PostalCodeInquiryRequest
     */
    public function setCountryCode($countryCode)
    {
        $this->CountryCode = $countryCode;
        return $this;
    }
    

    
}