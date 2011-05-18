<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The descriptive data for a physical location. 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PackageMovementInformationService_Address
    extends FedEx_AbstractComplexType
{

    /**
     * Identification of a region (usually small) for mail/package delivery. Format and presence of this field will vary, depending on country. This element is required if the CountryCode is US or CA. PostalCode may also be required for other postal-aware countries.
     *
     * @param string $PostalCode
     * return FedEx_PackageMovementInformationService_Address
     */
    public function setPostalCode($postalCode)
    {
        $this->PostalCode = $postalCode;
        return $this;
    }
    
    /**
     * Identification of a country.
     *
     * @param string $CountryCode
     * return FedEx_PackageMovementInformationService_Address
     */
    public function setCountryCode($countryCode)
    {
        $this->CountryCode = $countryCode;
        return $this;
    }
    

    
}