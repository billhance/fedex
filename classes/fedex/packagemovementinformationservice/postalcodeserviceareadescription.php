<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Postal Code Service Area description.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PackageMovementInformationService_PostalCodeServiceAreaDescription
    extends FedEx_AbstractComplexType
{

    /**
     * Location ID
     *
     * @param string $LocationId
     * return FedEx_PackageMovementInformationService_PostalCodeServiceAreaDescription
     */
    public function setLocationId($locationId)
    {
        $this->LocationId = $locationId;
        return $this;
    }
    
    /**
     * State or Province code
     *
     * @param string $StateOrProvinceCode
     * return FedEx_PackageMovementInformationService_PostalCodeServiceAreaDescription
     */
    public function setStateOrProvinceCode($stateOrProvinceCode)
    {
        $this->StateOrProvinceCode = $stateOrProvinceCode;
        return $this;
    }
    
    /**
     * Postal Code
     *
     * @param string $PostalCode
     * return FedEx_PackageMovementInformationService_PostalCodeServiceAreaDescription
     */
    public function setPostalCode($postalCode)
    {
        $this->PostalCode = $postalCode;
        return $this;
    }
    
    /**
     * Service area code
     *
     * @param string $ServiceArea
     * return FedEx_PackageMovementInformationService_PostalCodeServiceAreaDescription
     */
    public function setServiceArea($serviceArea)
    {
        $this->ServiceArea = $serviceArea;
        return $this;
    }
    

    
}