<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The descriptive data for a physical location. 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_LocatorService_Address
    extends FedEx_AbstractComplexType
{

    /**
     * Combination of number, street name, etc. Empty lines should not be included.
     *
     * @param array[string] $StreetLines
     * return FedEx_LocatorService_Address
     */
    public function setStreetLines(array $streetLines)
    {
        $this->StreetLines = $streetLines;
        return $this;
    }
    
    /**
     * Name of city, town, etc. 
     *
     * @param string $City
     * return FedEx_LocatorService_Address
     */
    public function setCity($city)
    {
        $this->City = $city;
        return $this;
    }
    
    /**
     * Identifying abbreviation for US state, Canada province, etc. Format and presence of this field will vary, depending on country.
     *
     * @param string $StateOrProvinceCode
     * return FedEx_LocatorService_Address
     */
    public function setStateOrProvinceCode($stateOrProvinceCode)
    {
        $this->StateOrProvinceCode = $stateOrProvinceCode;
        return $this;
    }
    
    /**
     * Identification of a region (usually small) for mail/package delivery. Format and presence of this field will vary, depending on country.
     *
     * @param string $PostalCode
     * return FedEx_LocatorService_Address
     */
    public function setPostalCode($postalCode)
    {
        $this->PostalCode = $postalCode;
        return $this;
    }
    
    /**
     * Relevant only to addresses in Puerto Rico. In Puerto Rico, multiple addresses within the same ZIP code can have the same house number and street name. When this is the case, the urbanization code is needed to distinguish them.
     *
     * @param string $UrbanizationCode
     * return FedEx_LocatorService_Address
     */
    public function setUrbanizationCode($urbanizationCode)
    {
        $this->UrbanizationCode = $urbanizationCode;
        return $this;
    }
    
    /**
     * Identification of a country. Defaults to "US". Valid values: US - United States, CA - Canada.
     *
     * @param string $CountryCode
     * return FedEx_LocatorService_Address
     */
    public function setCountryCode($countryCode)
    {
        $this->CountryCode = $countryCode;
        return $this;
    }
    
    /**
     * Indicates whether this address is residential (as opposed to commercial).
     *
     * @param boolean $Residential
     * return FedEx_LocatorService_Address
     */
    public function setResidential($residential)
    {
        $this->Residential = $residential;
        return $this;
    }
    

    
}