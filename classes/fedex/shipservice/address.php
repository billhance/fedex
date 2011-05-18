<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of "address parts" which should be handled as a unit (such as a city-state-ZIP combination within the US).
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_Address
    extends FedEx_AbstractComplexType
{

    /**
     * Combination of number, street name, etc. At least one line is required for a valid physical address; empty lines should not be included.
     *
     * @param array[string] $StreetLines
     * return FedEx_ShipService_Address
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
     * return FedEx_ShipService_Address
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
     * return FedEx_ShipService_Address
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
     * return FedEx_ShipService_Address
     */
    public function setPostalCode($postalCode)
    {
        $this->PostalCode = $postalCode;
        return $this;
    }
    
    /**
     * Relevant only to addresses in Puerto Rico.
     *
     * @param string $UrbanizationCode
     * return FedEx_ShipService_Address
     */
    public function setUrbanizationCode($urbanizationCode)
    {
        $this->UrbanizationCode = $urbanizationCode;
        return $this;
    }
    
    /**
     * The two-letter code used to identify a country.
     *
     * @param string $CountryCode
     * return FedEx_ShipService_Address
     */
    public function setCountryCode($countryCode)
    {
        $this->CountryCode = $countryCode;
        return $this;
    }
    
    /**
     * Indicates whether this address residential (as opposed to commercial).
     *
     * @param boolean $Residential
     * return FedEx_ShipService_Address
     */
    public function setResidential($residential)
    {
        $this->Residential = $residential;
        return $this;
    }
    

    
}