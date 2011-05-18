<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_AddressValidationService_ParsedAddress
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param ParsedAddressPart $ParsedUrbanizationCode
     * return FedEx_AddressValidationService_ParsedAddress
     */
    public function setParsedUrbanizationCode(FedEx_AddressValidationService_ParsedAddressPart $parsedUrbanizationCode)
    {
        $this->ParsedUrbanizationCode = $parsedUrbanizationCode;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[ParsedAddressPart] $ParsedStreetLine
     * return FedEx_AddressValidationService_ParsedAddress
     */
    public function setParsedStreetLine(array $parsedStreetLine)
    {
        $this->ParsedStreetLine = $parsedStreetLine;
        return $this;
    }
    
    /**
     * 
     *
     * @param ParsedAddressPart $ParsedCity
     * return FedEx_AddressValidationService_ParsedAddress
     */
    public function setParsedCity(FedEx_AddressValidationService_ParsedAddressPart $parsedCity)
    {
        $this->ParsedCity = $parsedCity;
        return $this;
    }
    
    /**
     * 
     *
     * @param ParsedAddressPart $ParsedStateOrProvinceCode
     * return FedEx_AddressValidationService_ParsedAddress
     */
    public function setParsedStateOrProvinceCode(FedEx_AddressValidationService_ParsedAddressPart $parsedStateOrProvinceCode)
    {
        $this->ParsedStateOrProvinceCode = $parsedStateOrProvinceCode;
        return $this;
    }
    
    /**
     * 
     *
     * @param ParsedAddressPart $ParsedPostalCode
     * return FedEx_AddressValidationService_ParsedAddress
     */
    public function setParsedPostalCode(FedEx_AddressValidationService_ParsedAddressPart $parsedPostalCode)
    {
        $this->ParsedPostalCode = $parsedPostalCode;
        return $this;
    }
    
    /**
     * 
     *
     * @param ParsedAddressPart $ParsedCountryCode
     * return FedEx_AddressValidationService_ParsedAddress
     */
    public function setParsedCountryCode(FedEx_AddressValidationService_ParsedAddressPart $parsedCountryCode)
    {
        $this->ParsedCountryCode = $parsedCountryCode;
        return $this;
    }
    

    
}