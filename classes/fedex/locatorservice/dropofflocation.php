<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The descriptive data of locations matching the criteria provided in the drop of locator request. A maximum of ten different locations can be returned.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_LocatorService_DropoffLocation
    extends FedEx_AbstractComplexType
{

    /**
     * Name of the business at this location.
     *
     * @param string $BusinessName
     * return FedEx_LocatorService_DropoffLocation
     */
    public function setBusinessName($businessName)
    {
        $this->BusinessName = $businessName;
        return $this;
    }
    
    /**
     * Identifier that can be used by IVR Attendant to look up directions to this location.
     *
     * @param string $BusinessId
     * return FedEx_LocatorService_DropoffLocation
     */
    public function setBusinessId($businessId)
    {
        $this->BusinessId = $businessId;
        return $this;
    }
    
    /**
     * A textual description of the type of business, such as "FedEx Authorized Ship Center".
     *
     * @param string $BusinessDescription
     * return FedEx_LocatorService_DropoffLocation
     */
    public function setBusinessDescription($businessDescription)
    {
        $this->BusinessDescription = $businessDescription;
        return $this;
    }
    
    /**
     * The descriptive data of the physical location.
     *
     * @param Address $BusinessAddress
     * return FedEx_LocatorService_DropoffLocation
     */
    public function setBusinessAddress(FedEx_LocatorService_Address $businessAddress)
    {
        $this->BusinessAddress = $businessAddress;
        return $this;
    }
    
    /**
     * The descriptive data of the distance.
     *
     * @param Distance $Distance
     * return FedEx_LocatorService_DropoffLocation
     */
    public function setDistance(FedEx_LocatorService_Distance $distance)
    {
        $this->Distance = $distance;
        return $this;
    }
    
    /**
     * The descriptive data of the services offered at this location.
     *
     * @param DropoffLocationProfile $ServiceProfile
     * return FedEx_LocatorService_DropoffLocation
     */
    public function setServiceProfile(FedEx_LocatorService_DropoffLocationProfile $serviceProfile)
    {
        $this->ServiceProfile = $serviceProfile;
        return $this;
    }
    
    /**
     * Of the Total locations available this is the individual location identifier.
     *
     * @param  $RecordIndex
     * return FedEx_LocatorService_DropoffLocation
     */
    public function setRecordIndex( $recordIndex)
    {
        $this->RecordIndex = $recordIndex;
        return $this;
    }
    

    
}