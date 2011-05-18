<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_AddressValidationService_AddressValidationOptions
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param boolean $VerifyAddresses
     * return FedEx_AddressValidationService_AddressValidationOptions
     */
    public function setVerifyAddresses($verifyAddresses)
    {
        $this->VerifyAddresses = $verifyAddresses;
        return $this;
    }
    
    /**
     * 
     *
     * @param boolean $CheckResidentialStatus
     * return FedEx_AddressValidationService_AddressValidationOptions
     */
    public function setCheckResidentialStatus($checkResidentialStatus)
    {
        $this->CheckResidentialStatus = $checkResidentialStatus;
        return $this;
    }
    
    /**
     * 
     *
     * @param  $MaximumNumberOfMatches
     * return FedEx_AddressValidationService_AddressValidationOptions
     */
    public function setMaximumNumberOfMatches( $maximumNumberOfMatches)
    {
        $this->MaximumNumberOfMatches = $maximumNumberOfMatches;
        return $this;
    }
    
    /**
     * 
     *
     * @param AddressValidationAccuracyType $StreetAccuracy
     * return FedEx_AddressValidationService_AddressValidationOptions
     */
    public function setStreetAccuracy(FedEx_AddressValidationService_AddressValidationAccuracyType $streetAccuracy)
    {
        $this->StreetAccuracy = $streetAccuracy;
        return $this;
    }
    
    /**
     * 
     *
     * @param AddressValidationAccuracyType $DirectionalAccuracy
     * return FedEx_AddressValidationService_AddressValidationOptions
     */
    public function setDirectionalAccuracy(FedEx_AddressValidationService_AddressValidationAccuracyType $directionalAccuracy)
    {
        $this->DirectionalAccuracy = $directionalAccuracy;
        return $this;
    }
    
    /**
     * 
     *
     * @param AddressValidationAccuracyType $CompanyNameAccuracy
     * return FedEx_AddressValidationService_AddressValidationOptions
     */
    public function setCompanyNameAccuracy(FedEx_AddressValidationService_AddressValidationAccuracyType $companyNameAccuracy)
    {
        $this->CompanyNameAccuracy = $companyNameAccuracy;
        return $this;
    }
    
    /**
     * 
     *
     * @param boolean $ConvertToUpperCase
     * return FedEx_AddressValidationService_AddressValidationOptions
     */
    public function setConvertToUpperCase($convertToUpperCase)
    {
        $this->ConvertToUpperCase = $convertToUpperCase;
        return $this;
    }
    
    /**
     * 
     *
     * @param boolean $RecognizeAlternateCityNames
     * return FedEx_AddressValidationService_AddressValidationOptions
     */
    public function setRecognizeAlternateCityNames($recognizeAlternateCityNames)
    {
        $this->RecognizeAlternateCityNames = $recognizeAlternateCityNames;
        return $this;
    }
    
    /**
     * 
     *
     * @param boolean $ReturnParsedElements
     * return FedEx_AddressValidationService_AddressValidationOptions
     */
    public function setReturnParsedElements($returnParsedElements)
    {
        $this->ReturnParsedElements = $returnParsedElements;
        return $this;
    }
    

    
}