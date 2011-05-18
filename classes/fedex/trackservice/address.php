<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The descriptive data for a physical location.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_TrackService_Address
    extends FedEx_AbstractComplexType
{

    /**
     * Combination of number, street name, etc. At least one line is required for a valid physical address; empty lines should not be included.
     *
     * @param array[string] $StreetLines
     * return FedEx_TrackService_Address
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
     * return FedEx_TrackService_Address
     */
    public function setCity($city)
    {
        $this->City = $city;
        return $this;
    }
    
    /**
     * Identifying abbreviation for US state, Canada province, etc. Format and presence of this field will vary, depending on country. This element is required if PostalCode is not present.
     *
     * @param string $StateOrProvinceCode
     * return FedEx_TrackService_Address
     */
    public function setStateOrProvinceCode($stateOrProvinceCode)
    {
        $this->StateOrProvinceCode = $stateOrProvinceCode;
        return $this;
    }
    
    /**
     * Identification of a region (usually small) for mail/package delivery. Format and presence of this field will vary, depending on country. This element is required if both the City and StateOrProvinceCode are not present.
     *
     * @param string $PostalCode
     * return FedEx_TrackService_Address
     */
    public function setPostalCode($postalCode)
    {
        $this->PostalCode = $postalCode;
        return $this;
    }
    
    /**
     * Currently not supported.
     *
     * @param string $UrbanizationCode
     * return FedEx_TrackService_Address
     */
    public function setUrbanizationCode($urbanizationCode)
    {
        $this->UrbanizationCode = $urbanizationCode;
        return $this;
    }
    
    /**
     * Identification of a country.
     *
     * @param string $CountryCode
     * return FedEx_TrackService_Address
     */
    public function setCountryCode($countryCode)
    {
        $this->CountryCode = $countryCode;
        return $this;
    }
    
    /**
     * Currently not supported.
     *
     * @param boolean $Residential
     * return FedEx_TrackService_Address
     */
    public function setResidential($residential)
    {
        $this->Residential = $residential;
        return $this;
    }
    

    
}